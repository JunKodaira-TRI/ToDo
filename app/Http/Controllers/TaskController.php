<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //テスト
    public function index(int $id)
    {
        $folders = Folder::all();

        return view('tasks/index',[
            'folders' => $folders,
            'current_folder_id' => $id,
        ]);
    }
}
