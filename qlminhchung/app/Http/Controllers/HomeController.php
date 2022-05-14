<?php

namespace App\Http\Controllers;

use App\Baocaocsgd;
use App\User;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Charts\Home;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
     $data = DB::table('baocaocsgds')
       ->select(
        DB::raw('danhgia as danhgia'),
        DB::raw('count(*) as number'))
       ->groupBy('danhgia')
       ->get();
     $array[] = ['danhgia', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->danhgia, $value->number];
     }  
     return view('home')->with('danhgia', json_encode($array));
    }

    public function show(){
        return view('nhomthuchien');
    }
}
