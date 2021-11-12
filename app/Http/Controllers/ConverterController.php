<?php

namespace App\Http\Controllers;

use App\Models\Amount;
use App\Services\ConverterService;
use Illuminate\Http\Request;

class ConverterController extends Controller
{
    public function convert(Request $request)
    {
        $amount = new Amount(amount: $request->input('amount'));

        $converterService = new ConverterService(amount: $amount);

        $result = $converterService->convert(from: $request->input('from'), to: $request->input('to'));

        return response()->json(['result' => $result], 200);
    }
}
