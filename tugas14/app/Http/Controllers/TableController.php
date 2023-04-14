<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    function get_table()
    {
        return view('lamanku.table');
    }

    function get_dataTable()
    {
        return view('lamanku.data-table');
    }
}
