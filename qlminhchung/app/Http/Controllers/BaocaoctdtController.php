<?php

namespace App\Http\Controllers;

use App\Baocaoctdt;
use App\Minhchungctdt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class BaocaoctdtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table("baocaoctdts");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(50); 

        return view('/baocaoctdt/danhsachbaocaoctdt',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $minhchungctdtList = Minhchungctdt::select('id','sohieu')->get();

        
        if($request->isMethod('post')){
            $tenbaocao = $request->input("tenbaocao");
            $tentieuchuan = $request->input("tentieuchuan");
            $tentieuchi = $request->input("tentieuchi");
            $tenctdt = $request->input("tenctdt");
            $danhgia = $request->input("danhgia");
            $noidungbaocao = $request->input("noidungbaocao");
            $tennhombaocao = $request->input("tennhombaocao");
            $sohieuminhchung = $request->input("sohieuminhchung");
            

            $baocaoctdt = new Baocaoctdt();
            $baocaoctdt->tenbaocao=$tenbaocao;
            $baocaoctdt->tentieuchuan=$tentieuchuan;
            $baocaoctdt->tentieuchi=$tentieuchi;
            $baocaoctdt->tenctdt=$tenctdt;
            $baocaoctdt->danhgia=$danhgia;
            $baocaoctdt->noidungbaocao=$noidungbaocao;
            $baocaoctdt->tennhombaocao=$tennhombaocao;
            $baocaoctdt->sohieuminhchung=$sohieuminhchung;   
            $baocaoctdt->save(); 

            return Redirect::to("/danhsachbaocaoctdt");
        }
    
        
        return view('/baocaoctdt/vietbaocaoctdt',compact('minhchungctdtList'));
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
        $minhchungctdtList = Minhchungctdt::select('id','sohieu')->get();
        $data_view = array();
        $baocaoctdt = Baocaoctdt::find($id);
        $data_view["baocaoctdt"] = $baocaoctdt;
        if($request->isMethod('post')){
            $tenbaocao = $request->input("tenbaocao");
            $tentieuchuan = $request->input("tentieuchuan");
            $tentieuchi = $request->input("tentieuchi");
            $tenctdt = $request->input("tenctdt");
            $danhgia = $request->input("danhgia");
            $noidungbaocao = $request->input("noidungbaocao");
            $tennhombaocao = $request->input("tennhombaocao");
            $sohieuminhchung = $request->input("sohieuminhchung");
            

            $baocaoctdt->tenbaocao=$tenbaocao;
            $baocaoctdt->tentieuchuan=$tentieuchuan;
            $baocaoctdt->tentieuchi=$tentieuchi;
            $baocaoctdt->tenctdt=$tenctdt;
            $baocaoctdt->danhgia=$danhgia;
            $baocaoctdt->noidungbaocao=$noidungbaocao;
            $baocaoctdt->tennhombaocao=$tennhombaocao;
            $baocaoctdt->sohieuminhchung=$sohieuminhchung;   
            $baocaoctdt->save(); 

            return Redirect::to("/danhsachbaocaoctdt");
        }
        return view('baocaoctdt/suabaocaoctdt',$data_view,compact('minhchungctdtList')); 
        
    }
    public function delete($id)
    {
        $baocaoctdtDelete = Baocaoctdt::find($id);
        $baocaoctdtDelete->delete();

        return redirect('/danhsachbaocaoctdt');
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
