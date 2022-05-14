<?php

namespace App\Http\Controllers;
use App\Tieuchuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
class TieuchuanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $query = DB::table("tieuchuans");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(100); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/tieuchuan/tieuchuan',$data);
    }
        public function add(Request $request)
    {
        if($request->isMethod('post')){
            $tentieuchuan = $request->input("tentieuchuan");
            $cap_id = $request->input("cap_id");
            $tieuchuan = new Tieuchuan();
            $tieuchuan->cap_id=$cap_id;
            $tieuchuan->tentieuchuan=$tentieuchuan;
            $tieuchuan->save(); 
            return Redirect::to("/tieuchuan");
        }
        return view('/tieuchuan/themtieuchuan');
    }
}
