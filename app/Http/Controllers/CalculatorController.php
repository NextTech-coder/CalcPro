<?php

namespace App\Http\Controllers;

use App\Models\Calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function show(Calculator $calculator, $input = null)
    {
        dump($calculator);
        return view("calculator", [
            "data" => base64_decode(str_replace(".", "/", $input))
        ]);
    }

    public function getUrl(Request $request)
    {
        $url = ["url" => str_replace("/", ".", base64_encode($request->input("data")))];
        return response()->json($url);
    }
}
