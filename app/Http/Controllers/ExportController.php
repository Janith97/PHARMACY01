<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\IncomeExport;
use Excel;

class ExportController extends Controller
{
    public function exportIncome(){
        return Excel::download(new IncomeExport,'income.xlsx');
    }
}
