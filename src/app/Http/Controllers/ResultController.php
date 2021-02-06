<?php

namespace App\Http\Controllers;

use App\Http\Requests\Result\EditResultRequest;
use App\Http\Requests\Result\UpdateResultRequest;
use App\Models\Result;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ResultController extends Controller
{
    /**
     * ランキング詳細（難易度別）
     * 
     * @param $id
     * @return Factory|View
     */
    public function show ($id)
    {
        $result_object = DB::table('results')->where('type', $id)->get();
        if (!$result_object) {
            abort(Response::HTTP_NOT_FOUND);
        }
        foreach ($result_object as $r) {
            $result[] = [
                'name' => $r->name,
                'time' => $r->time,
            ];
        }
        // 時間順に並び替え
        foreach ($result as $key => $value) {
            $standard_key_array[$key] = $value['time'];
        }
        array_multisort($standard_key_array, SORT_ASC, $result);

        // 順位取得
        session_start();
        foreach ($result as $key => $value) {
            if ($value['time'] == $_SESSION['time']) {
                $number = $key + 1;
            }
        }

        return view('result.show', compact('result', 'number'));
    }

    /**
     * ランキング編集（難易度別）（createに変えた方が良いかも）
     * 
     * @param EditResultRequest $request
     * @param $id
     * @return Factory|View
     */
    public function edit (EditResultRequest $request, $id)
    {
        // 記録の再登録防止
        session_start();
        if ($_SESSION['isAgain']) {
            return redirect('/');
        }

        // 現在のユーザーのデータ
        $data = $request->validated();
        $time = $data['time'];
        $yours = [
            'name' => 'あなた',
            'time' => $time,
        ];

        // inputタグの値を書き換えられていないかチェック
        // 暗号化ロジックが書かれてるので、githubリポジトリをprivateにするべき（今回のアプリでそこまでする必要はないが）
        $time2 = $data['time2'];
        if (($time + 37) * 791 !== floatval($time2)) {
            return redirect('/');
        }

        $_SESSION['time'] = $time;
        $_SESSION['isAgain'] = false;

        // DBに保存された過去のユーザーのデータ
        $result = [];
        $result_object = DB::table('results')->where('type', $id)->get();
        foreach ($result_object as $r) {
            $result[] = [
                'name' => $r->name,
                'time' => $r->time,
            ];
        }

        // 上記2種類を合わせる
        array_push($result, $yours);

        // 時間順に並び替え
        foreach ($result as $key => $value) {
            $standard_key_array[$key] = $value['time'];
        }
        array_multisort($standard_key_array, SORT_ASC, $result);

        // 現在のユーザーのデータが何位か確認
        foreach ($result as $key => $value) {
            if ($value['name'] === 'あなた') {
                $number = $key + 1;
            }
        }
        if ($number > 10) {
            $number = "";
        }
  
        return view('result.edit', compact('result', 'time', 'number', 'id'));
    }

    /**
     * ランキング更新（難易度別）（storeに変えた方が良いかも）
     * 
     * @param UpdateResultRequest $request
     * @param $id
     * @return RedirectResponse|Redirector
     * @throws Exception
     */
    public function update (UpdateResultRequest $request, $id)
    { 
        $data = $request->validated();
        $result = new Result();
        $result->name = $data['name'];
        
        session_start();
        $result->time = $_SESSION['time'];
        $_SESSION['isAgain'] = true;

        $result->type = $id;
        $result->save();

        return redirect(route('result.show', ['result' => $id]));
    }
}
