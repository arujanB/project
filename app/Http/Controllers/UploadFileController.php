<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUploadFile(Request $request)
    {
        //
        $file = $request->file('image');

        echo 'File name: '.$file->getClientOriginalName();
        echo '<br>';

        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        echo 'File Size: '.$file->getSize();
        echo '<br>';

        echo 'File Mime Type: '.$file->getMimeType();

        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());
    }
}
