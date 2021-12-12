<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultController extends Controller
{
    public function create()
    {
        $create = rand(1, 7);
        if ($create == 1) {
            $result = '大吉';
        }
        if ($create == 2) {
            $result = '吉';
        }
        if ($create == 3) {
            $result = '中吉';
        }
        if ($create == 4) {
            $result = '小吉';
        }
        if ($create == 5) {
            $result = '末吉';
        }
        if ($create == 6) {
            $result = '凶';
        }
        if ($create == 7) {
            $result = '大凶';
        }
        return view('result', ['result' => $result]);
    }
}
