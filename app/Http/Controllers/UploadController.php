<?php

namespace App\Http\Controllers;

use App\UploadFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('upload');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UploadController  $uploadFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadController $uploadFile)
    {
        if ($request->hasFile('file')) {
			if (!$request->file->isValid()) {return view('upload',['error' => "Something went wrong"]);}
			if(preg_match("/php$/",$request->file->getClientOriginalName()) !== 0){return view('upload',['error' => "Invalid file extension"]);}			
			
			$data = $request->validate([
				'title' => 'required|max:191',
			]);
			
			$path = $request->file->store('public');
					
			$file = new \App\File();
			$file->name = $data['title'];
			$file->file = $path;
			$file->user_id = \Auth::id();
			$file->save();					
					
			return view('upload',['path' => $path]);
		}
		return view('upload');
    }
}
