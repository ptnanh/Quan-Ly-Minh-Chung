<?php

namespace App\Http\Controllers;

use App\Tieuchuanctdt;
use App\Baocaoctdt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class TieuchuanctdtController extends Controller
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
        $query = DB::table("tieuchuanctdts");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(100); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/tieuchuanctdt/tieuchuanctdt',$data);
    }
    public function add(Request $request)
    {
        if($request->isMethod('post')){
            $tentieuchuan = $request->input("tentieuchuan");
            $tencap = $request->input("tencap");
            $noidung = $request->input("noidung");
            $tieuchuan = new Tieuchuanctdt();
            $tieuchuan->noidung=$noidung;
            $tieuchuan->tencap=$tencap;
            $tieuchuan->tentieuchuan=$tentieuchuan;
            $tieuchuan->save(); 
            return Redirect::to("/tieuchuanctdt");
        }
        return view('/tieuchuanctdt/themtieuchuanctdt');
    }
    public function search(Request $request)
    {
        $query = DB::table("tieuchuanctdts");
        if($request->isMethod('post')){
            $tentieuchuan = $request->input("tentieuchuan");
            $noidung = $request->input("noidung");
            $query = $query ->where('tentieuchuan', 'like', '%' .  $tentieuchuan . '%')->where('noidung', 'like', '%' .  $noidung . '%');
                      
                            
        }
        $data =  $query->orderby("id")->select("*") -> get();
        return view('/tieuchuanctdt/timtieuchuanctdt') -> with("data",$data);

    }
    public function show()
    {
        $query = DB::table("tieuchuanctdts");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(50); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/tieuchuanctdt/chontieuchuanctdt',$data);
    }
}
