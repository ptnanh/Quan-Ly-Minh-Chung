<?php

namespace App\Http\Controllers;
use App\Minhchungctdt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class MinhchungctdtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $query = DB::table("minhchungctdts");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(50); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/minhchungctdt/minhchungctdt',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $tenminhchung = $request->input("tenminhchung");
            $noibanhanh = $request->input("noibanhanh");
            $ngaybanhanh = $request->input("ngaybanhanh");
            $tenctdt = $request->input("tenctdt");
            $sohieu = $request->input("sohieu");
            $tentieuchuan = $request->input("tentieuchuan");
            $tentieuchi = $request->input("tentieuchi");
            $tencap = $request->input("tencap");
            $noidung = $request->input("noidung");
            $file = $request->input("file");
            

            $minhchung = new Minhchungctdt();
            $minhchung->tenminhchung=$tenminhchung;
            $minhchung->noibanhanh=$noibanhanh;
            $minhchung->ngaybanhanh=$ngaybanhanh;
            $minhchung->tenctdt=$tenctdt;
            $minhchung->sohieu=$sohieu;
            $minhchung->tentieuchuan=$tentieuchuan;
            $minhchung->tentieuchi=$tentieuchi;
            $minhchung->tencap=$tencap;
            $minhchung->noidung=$noidung;
            $minhchung->file=$file;     
            $minhchung->save(); 

            return Redirect::to("/minhchungctdt");
        }
        return view('/minhchungctdt/themminhchungctdt');
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
    public function show()
    {
        $query = DB::table("minhchungctdts");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(50); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/minhchungctdt/chonminhchungctdt',$data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $data_view = array();
        $minhchung = Minhchungctdt::find($id);
        $data_view["minhchung"] = $minhchung;
        if($request->isMethod('post')){
            $tenminhchung = $request->input("tenminhchung");
            $noibanhanh = $request->input("noibanhanh");
            $ngaybanhanh = $request->input("ngaybanhanh");
            $tenctdt = $request->input("tenctdt");
            $sohieu = $request->input("sohieu");
            $tentieuchuan = $request->input("tentieuchuan");
            $tentieuchi = $request->input("tentieuchi");
            $tencap = $request->input("tencap");
            $noidung = $request->input("noidung");
            $file = $request->input("file");
            

            $minhchung->tenminhchung=$tenminhchung;
            $minhchung->noibanhanh=$noibanhanh;
            $minhchung->ngaybanhanh=$ngaybanhanh;
            $minhchung->tenctdt=$tenctdt;
            $minhchung->sohieu=$sohieu;
            $minhchung->tentieuchuan=$tentieuchuan;
            $minhchung->tentieuchi=$tentieuchi;
            $minhchung->tencap=$tencap;
            $minhchung->noidung=$noidung;
            $minhchung->file=$file;     
            $minhchung->save(); 

            return Redirect::to("/minhchungctdt");
        }
        return view('minhchungctdt/suaminhchungctdt',$data_view); 
        
    }
    public function delete($id)
    {
        $minhchungDelete = Minhchungctdt::find($id);
        $minhchungDelete->delete();

        return redirect('/minhchungctdt');
        alert('Đã xóa thành công minh chứng');
    }
    public function search(Request $request)
    {
        $query = DB::table("minhchungctdts");
        if($request->isMethod('post')){
            $tenminhchung = $request->input("tenminhchung");
            $tentieuchuan = $request->input("tentieuchuan");
            $tentieuchi = $request->input("tentieuchi");
            $sohieu = $request->input("sohieu");
            $query = $query ->where('tenminhchung', 'like', '%' .  $tenminhchung . '%')->where('sohieu', 'like', '%' .  $sohieu . '%')
                            ->where('tentieuchuan', 'like', '%' .  $tentieuchuan . '%')->where('tentieuchi', 'like', '%' .  $tentieuchi . '%');
                            
        }
        $data =  $query->orderby("id")->select("*") -> get();
        return view('/minhchungctdt/timminhchungctdt') -> with("data",$data);

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
}
