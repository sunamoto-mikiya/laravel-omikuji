<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultController extends Controller
{
    public function create()
    {
        $create = rand(1, 4);
        if ($create == 1) {
            $result = '大吉';
            $result_img = 'omikuji_daikichi.png';
        }
        if ($create == 2) {
            $result = '吉';
            $result_img = 'omikuji_kichi.png';
        }
        if ($create == 3) {
            $result = '中吉';
            $result_img = 'omikuji_chuukichi.png';
        }
        if ($create == 4) {
            $result = '凶';
            $result_img = 'omikuji_kyou.png';
        }
        return view('result', ['result' => $result, 'result_img' => $result_img]);
    }
}
