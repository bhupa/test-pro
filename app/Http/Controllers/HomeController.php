<?php

namespace App\Http\Controllers;

use App\ContactInformations;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        
           return view('home');
    }

    public function contaactLists(){
      

        $filePath = storage_path('app/public/form_data.csv');

        if (!File::exists($filePath)) {
            return redirect()->back()->with('error', 'File does not exist.');
        }
    
        $file = fopen($filePath, 'r');
        $data = [];

        while (($row = fgetcsv($file)) !== false) {
            $data[] = $row;
        }
    
        fclose($file);
       
    
        return view('contact-information.lists',compact('data'));
    }
}
