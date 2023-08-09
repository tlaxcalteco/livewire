<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\Export;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Exports\PostulateExport;

class PostulateController extends Controller
{
    public function index()
    {
        $postulates = User::all();
        return view('index', compact('postulates'));
    }
    
    public function create($postulateId = null)
    {
        return view('postulate-create', compact('postulateId'));
    }

    public function export()
    {
        Excel::download(new PostulateExport, 'postulates.xlsx');
    }
}
