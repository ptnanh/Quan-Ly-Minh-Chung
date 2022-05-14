<?php

namespace App\Http\Controllers;

use App\Baocaocsgd;
use App\Minhchungcsgd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class BaocaocsgdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table("baocaocsgds");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(50); 

        return view('/baocaocsgd/danhsachbaocaocsgd',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $minhchungcsgdList = Minhchungcsgd::select('id','sohieu')->get();

        
        if($request->isMethod('post')){
            $tenbaocao = $request->input("tenbaocao");
            $tentieuchuan = $request->input("tentieuchuan");
            $tentieuchi = $request->input("tentieuchi");
            $danhgia = $request->input("danhgia");
            $noidungbaocao = $request->input("noidungbaocao");
            $tennhombaocao = $request->input("tennhombaocao");
            $sohieuminhchung = $request->input("sohieuminhchung");
            

            $baocaocsgd = new Baocaocsgd();
            $baocaocsgd->tenbaocao=$tenbaocao;
            $baocaocsgd->tentieuchuan=$tentieuchuan;
            $baocaocsgd->tentieuchi=$tentieuchi;
            $baocaocsgd->danhgia=$danhgia;
            $baocaocsgd->noidungbaocao=$noidungbaocao;
            $baocaocsgd->tennhombaocao=$tennhombaocao;
            $baocaocsgd->sohieuminhchung=$sohieuminhchung;   
            $baocaocsgd->save(); 

            return Redirect::to("/danhsachbaocaocsgd");
        }
    
        
        return view('/baocaocsgd/vietbaocaocsgd',compact('minhchungcsgdList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $minhchungcsgdList = Minhchungcsgd::select('id','sohieu')->get();
        $data_view = array();
        $baocaocsgd = Baocaocsgd::find($id);
        $data_view["baocaocsgd"] = $baocaocsgd;
        if($request->isMethod('post')){
            $tenbaocao = $request->input("tenbaocao");
            $tentieuchuan = $request->input("tentieuchuan");
            $tentieuchi = $request->input("tentieuchi");
            $danhgia = $request->input("danhgia");
            $noidungbaocao = $request->input("noidungbaocao");
            $tennhombaocao = $request->input("tennhombaocao");
            $sohieuminhchung = $request->input("sohieuminhchung");
            

            $baocaocsgd->tenbaocao=$tenbaocao;
            $baocaocsgd->tentieuchuan=$tentieuchuan;
            $baocaocsgd->tentieuchi=$tentieuchi;
            $baocaocsgd->danhgia=$danhgia;
            $baocaocsgd->noidungbaocao=$noidungbaocao;
            $baocaocsgd->tennhombaocao=$tennhombaocao;
            $baocaocsgd->sohieuminhchung=$sohieuminhchung;   
            $baocaocsgd->save(); 

            return Redirect::to("/danhsachbaocaocsgd");
        }
        return view('baocaocsgd/suabaocaocsgd',$data_view,compact('minhchungcsgdList')); 
        
    }
    public function delete($id)
    {
        $baocaocsgdDelete = Baocaocsgd::find($id);
        $baocaocsgdDelete->delete();

        return redirect('/danhsachbaocaocsgd');
        alert('Đã xóa thành công minh chứng');
    }
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
}
