<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Film::all();
    //   dd($data);
      return view('admin.home',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $dataReq = new Film;
        $dataReq->judul = $request->judul;
        $dataReq->sinopsis = $request->sinopsis;
        $dataReq->tahun = $request->tahun;
        $dataReq->rating = $request->rating;
        $dataReq->img_url = $request->img_url;
        if($dataReq->save()){
            return redirect()->back()->with('message', 'Data berhasil dimasukan');   
        }
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
        // dd($id);
        $data = Film::find($id);
        return view('admin.detail',['data'=>$data]);
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
        //   dd($request,'$id');
        $dataReq = Film::find($id);
        $dataReq->judul = $request->judul;
        $dataReq->sinopsis = $request->sinopsis;
        $dataReq->tahun = $request->tahun;
        $dataReq->rating = $request->rating;
        $dataReq->img_url = $request->img_url;
        if($dataReq->save()){
            return redirect()->back()->with('message', 'Data berhasil diupdate');   
        }
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
        $dataDel = Film::find($id);
        if( $dataDel->delete()){
            return redirect()->back()->with('message', 'Data berhasil dihapus');   
        }
 //
    }
}
