<?php

namespace App\Http\Controllers;

use App\file;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files= file::all();

        return view('welcome')->with('files',$files);
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
        $validation=$request->validate([

            'title'=>'required|unique:files,title',
            'type'=>'required',
            'file'=>'required',
             'brief'=>'required',
             'body'=>'required',
      ]);






     $data=new file;
    $file= $request->file('file');

        if($file){
            $fileName=time().'.'.$file->getClientOriginalExtension();
            if($request->type==="image"){
                $file->move('images/',$fileName);
                }
            else  $file->move('videos/',$fileName);

            $data->source=$fileName;
        }

        $data->title=$request->title;
        $data->type=$request->type;
        $data->brief=$request->brief;
        $data->body=$request->body;
        $data->status=true;
        $data->save();

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function show(file $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(file $file,$id)
    {
        $files=file::find($id);
        $files->status=!$files->status;
        $files->save();
        return redirect()->back();


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, file $file)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(file $file)
    {
        //
    }


    public function image($id)
    {
        $files= file::find($id);

        return view('image')->with('files',$files);

    }

    public function video($id)
    {
        $files= file::find($id);

        return view('video')->with('files',$files);

    }


}
