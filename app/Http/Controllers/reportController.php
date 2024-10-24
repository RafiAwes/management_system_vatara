<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportController extends Controller
{
    public function viewReport(){

        $year = Carbon::now()->year;
        $prevYear = $year-1;

        $currentYears = report::where('year',$year)->get();
        $previousYears = report::where('year',$prevYear)->get();
        $reportDatas = DB::table('reports as current')
                            ->leftJoin('reports as previous', function($join) {
                                $join->on('current.month', '=', 'previous.month');
                            })
                            ->where('current.year', $year) // Current year filter
                            ->where('previous.year', $prevYear) // Previous year filter
                            ->select(
                                'current.month',
                                'current.students_admitted as current_students_admitted',
                                'previous.students_admitted as previous_students_admitted',
                                'current.students_graduated as current_students_graduated',
                                'previous.students_graduated as previous_students_graduated',
                                'current.revenue as current_revenue',
                                'previous.revenue as previous_revenue',
                                'current.expenses as current_expenses',
                                'previous.expenses as previous_expenses',
                                'current.year as current_year',
                                'previous.year as previous_year'
                            )
                            ->get();


        return view('admin.report',['year'=>$year,'prevYear'=>$prevYear,'reportDatas'=>$reportDatas]);
    }
}
