<?php

namespace App\Http\Controllers;
use App\Models\Skema;
use Illuminate\Http\Request;
use DataTables;
use Yajra\DataTables\DataTables as DataTablesDataTables;

class SkemaController extends Controller
{
    public function index()
    {
        return view('skema', [
            'skemas' => Skema::all()
        ]);
    }

    
    
}
