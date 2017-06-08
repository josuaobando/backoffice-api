<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class ApiReportController extends Controller
{
  public function report(Request $request)
  {
    $transactions = Transaction::all();
    return response()->json(compact('transactions'));
  }
}
