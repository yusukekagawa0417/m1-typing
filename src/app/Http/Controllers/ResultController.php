<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ResultController extends Controller
{
    /**
     * 結果一覧
     * 
     * @return Factory|View
     */
    public function index ()
    {
        return view('result.index');
    }

    /**
     * 結果作成
     * 
     * @return Factory|View
     */
    public function create (Request $request)
    {

        return view('result.create');
    }

    /**
     * 結果保存
     * 
     */
    public function store (Request $request)
    {
        return redirect(route('result.index'));
    }
}
