<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    
    public function showUploadForm()
    {
        return view('upload');
    }

    
    public function uploadFile(Request $request)
    {
       
        $request->validate([
            'file' => 'required|file|max:2048', 
        ]);

        
        $file = $request->file('file');

        
        $path = $file->store('uploads', 'public');

        
        File::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'type' => $file->getMimeType(),
            'size' => $file->getSize(),
        ]);

       
        return redirect()->route('file.form')->with('success', 'Archivo subido exitosamente.');
    }
    public function listFiles()
{
   
    $files = File::all();
    return view('files', compact('files'));
}

}
