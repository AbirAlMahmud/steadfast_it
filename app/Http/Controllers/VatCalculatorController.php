<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VatCalculatorController extends Controller
{

    public function calculate(Request $request)
    {
        $grossSum = $request->input('gross_sum');
        $operation = $request->input('operation');
        $taxPercentage = $request->input('tax_percentage');

        if ($operation === 'exclude') {
            $vatAmount = round(($grossSum / (1 + ($taxPercentage / 100))) - $grossSum, 2);
        } else {
            $vatAmount = round($grossSum * ($taxPercentage / 100), 2);
        }

        return view('backend.dashboard')->with('vatAmount', $vatAmount);
    }
}
