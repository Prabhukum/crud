<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Imports\UsersImport;

use Maatwebsite\Excel\facades\Excel;

class HomeController extends Controller
{
   public function view()
{
    return view("importexport");
}


public  function import(){
    Excel::import(new UsersImport, request()->file('saloon_data.xlsx'));
    return redirect()->back();
}

// public function fileExport()
//     {
//         return Excel::download(new UsersExport, 'users-collection.xlsx');
//     }

}
