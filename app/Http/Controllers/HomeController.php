<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $queryJob = DB::table('job');
        $namework = $request->get('namework');
        
        if (strlen($namework) > 0) {
            $queryJob->where('namework', 'LIKE', '%' . $namework . '%')->get();
        }
        $jobs =  $queryJob->get();
        return view('job.list', [
            'jobs' => $jobs,
            'currentPage' => $jobs,
            'namework' => $namework,
        ]);
    }
    public function search(Request $request)
    {
        $namework = $request->input('namework');
        
        if (strlen($namework) > 0) {
            $namework = DB::table('job')->where('namework', 'LIKE', '%' . $namework . '%')->get('namework');
        } else {
            $namework = [];
        }
        return  response()->json($namework);
    }
}
