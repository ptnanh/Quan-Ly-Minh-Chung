<?php

namespace App\Http\Controllers;
use DB;
use App\Tieuchictdt;
use Illuminate\Http\Request;

class TieuchictdtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table("tieuchictdts");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(100); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/tieuchictdt/tieuchictdt',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tieuchictdt/themtieuchictdt');
    }
    public function danhgia(){
        return view('/tieuchictdt/danhgiatieuchictdt');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = DB::table("tieuchicsgds");
        if($request->isMethod('post')){
            $tentieuchi = $request->input("tentieuchi");
            $tentieuchuan = $request->input("tentieuchuan");
            $tencap = $request->input("tencap");
            $noidung = $request->input("noidung");
            $query = $query ->where('tentieuchi', 'like', '%' .  $tentieuchi . '%')->where('tentieuchuan', 'like', '%' .  $tentieuchuan . '%')
                            ->where('tencap', 'like', '%' .  $tencap . '%')->where('noidung', 'like', '%' .  $noidung . '%');
                      
                            
        }
        $data =  $query->orderby("id")->select("*") -> get();
        return view('/tieuchicsgd/timtieuchicsgd') -> with("data",$data);

    }
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function show()
    {
        $query = DB::table("tieuchictdts");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(50); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/tieuchictdt/chontieuchictdt',$data);
    }

}
