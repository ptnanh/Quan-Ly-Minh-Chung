<?php

namespace App\Http\Controllers;

use App\Tieuchuancsgd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class TieuchuancsgdController extends Controller
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
        $query = DB::table("tieuchuancsgds");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(100); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/tieuchuancsgd/tieuchuancsgd',$data);
    }
    public function add(Request $request)
    {
        if($request->isMethod('post')){
            $tentieuchuan = $request->input("tentieuchuan");
            $tencap = $request->input("tencap");
            $noidung = $request->input("noidung");
            $tieuchuan = new Tieuchuancsgd();
            $tieuchuan->noidung=$noidung;
            $tieuchuan->tencap=$tencap;
            $tieuchuan->tentieuchuan=$tentieuchuan;
            $tieuchuan->save(); 
            return Redirect::to("/tieuchuancsgd");
        }
        return view('/tieuchuancsgd/themtieuchuancsgd');
    }
    public function search(Request $request)
    {
        $query = DB::table("tieuchuancsgds");
        if($request->isMethod('post')){
            $tentieuchuan = $request->input("tentieuchuan");
            $noidung = $request->input("noidung");
            $query = $query ->where('tentieuchuan', 'like', '%' .  $tentieuchuan . '%')->where('noidung', 'like', '%' .  $noidung . '%');
                      
                            
        }
        $data =  $query->orderby("id")->select("*") -> get();
        return view('/tieuchuancsgd/timtieuchuancsgd') -> with("data",$data);

    }
    public function show()
    {
        $query = DB::table("tieuchuancsgds");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(50); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/tieuchuancsgd/chontieuchuancsgd',$data);
    }
}
