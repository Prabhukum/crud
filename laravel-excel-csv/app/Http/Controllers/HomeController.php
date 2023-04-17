<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\UsersImport;

use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
   public function view()
{
    return view("importexport");
}


public  function import(){
    Excel::import(new UsersImport, request()->file('file'));
    return redirect()->back();
}

// public function fileExport()
//     {
//         return Excel::download(new UsersExport, 'users-collection.xlsx');
//     }

}
