<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($value1, $operator, $value2)
    {
        // 演算の結果を格納する変数
        $result = null;

        //演算子に応じて計算
        if ($operator == 'addition') {
            $result = $value1 + $value2;
        } else if ($operator == 'subtraction') {
            $result = $value1 - $value2;
        } else if ($operator == 'multiplication') {
            $result = $value1 * $value2;
        } else if ($operator == 'division') {
            $result = $value1 / $value2;
        } else {
            $result = 'Invalid operator';
        }

        //計算結果またはエラーメッセージをビューに渡す
        return view('message.calcs', [
            'result' => $result
        ]);
    }
}
