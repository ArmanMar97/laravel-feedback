<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    public function index(){
        $dashboardData = Feedback::all()->sortByDesc('id');
        return view('dashboard',['data'=>$dashboardData]);
    }

    public function show($id){
        $item = Feedback::where('id',$id)->firstOrFail();
        return view('dashboardItem',['item'=>$item]);
    }

    public function destroy($id){
        Feedback::where('id',$id)->delete();
        return redirect('/dashboard');
    }

}
