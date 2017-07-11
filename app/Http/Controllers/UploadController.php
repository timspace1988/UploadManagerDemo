<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\UploadManager;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    protected $uploadManager;
    public function __construct(UploadManager $manager){
        $this->uploadManager = $manager;
    }

    public function uploadFile(Request $request){
        var_dump($request->all());
        //exit();
        var_dump($_FILES);
        $file = $_FILES['file'];

        // $file = $request->file('file');
        // $file = $request->get('file');
        // echo $file1['name'].'<br>';
        // echo $file2['name'].'<br>';
        // echo $file3['name'].'<br>';
        $path = $file['name'];

        $content = File::get($file['tmp_name']);
        $result = $this->uploadManager->saveFile($path, $content);
        //var_dump($result);
        echo $this->uploadManager->getMimeType($path);
        if($result===true){
            return view('result', ['result' => $path]);
        }
        return view('result', compact('result'));
    }
}
