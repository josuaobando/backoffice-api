<?php

namespace App\Http\Controllers;

use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiReportController extends Controller
{
  public function report(Request $request)
  {
    $dateFromParam = $request->input('dateFrom', null);
    $dateToParam = $request->input('dateTo', null);

    if($dateFromParam && $dateToParam){
      $dateFrom = Carbon::parse($dateFromParam)->format('Y-m-d');
      $dateTo = Carbon::parse($dateToParam)->format('Y-m-d 23:59:59');

      $transactions = Transaction::whereBetween('created_at', array($dateFrom, $dateTo))->get();
    }

    return response()->json(compact('transactions'));
  }
}
