<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class TypingController extends Controller
{
    /**
     * タイピング詳細（難易度別）
     * 
     * @param $id
     * @return Factory|View
     */
    public function show ($id)
    {
        $file = new \SplFileObject("word${id}.csv");
        if (!$file) {
            abort(Response::HTTP_NOT_FOUND);
        }
        $file->setFlags(
            \SplFileObject::READ_CSV |
            \SplFileObject::READ_AHEAD |
            \SplFileObject::SKIP_EMPTY |
            \SplFileObject::DROP_NEW_LINE
        );
        foreach($file as $line)
        {
            $data[] = [
                'id'     => $line[0],
                'kana'   => $line[1],
                'target' => $line[2],
            ];
        }
        if (!$data) {
            abort(Response::HTTP_NOT_FOUND);
        }
        shuffle($data);
        $data = array_slice($data , 0, 5);

        session_start();
        $_SESSION['isAgain'] = false;

        return view('typing.show', compact('data', 'id'));
    }
}
