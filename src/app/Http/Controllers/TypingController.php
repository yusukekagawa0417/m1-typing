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
     * @param string $id
     * @return Factory|View
     */
    public function show ($id)
    {
        $file = new \SplFileObject("word${id}.csv");
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
        return view('typing.show', compact('data'));
    }
}
