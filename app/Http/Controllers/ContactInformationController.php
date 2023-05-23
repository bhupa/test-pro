<?php

namespace App\Http\Controllers;

use App\ContactInformations;
use App\Services\ContactInformationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Validator;

class ContactInformationController extends Controller
{
    
    public function __construct(ContactInformationService $contactInformationService)
    {
        $this->contactInformationService = $contactInformationService;
    }

    public function index()
    {

      
        if (request()->ajax()) {
            
            $contacts = ContactInformations::orderBy('created_at','desc')->get();
           
            return $this->contactInformationService->ajaxDataCall();
      
           }
        
        return view('contact-information.index');
    }

    public function store(Request $request){

   
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:contact_informations,email',
            'mobile' => 'required|numeric|unique:contact_informations,mobile',
            'address' => 'required',
            'nationality' => 'required',
            'gender'=>'required|in:Male,Female,Others',
            'dob'=>'required|date|before:today',
            'qualification'=>'required|in:Slc,Plus Two,Bachelor Degree,Master Degree,Phd'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $data = $request->except(['_token','type']);
   
        if($this->contactInformationService->create($data)){
            

            $csvFileName = 'form_data.csv';
            $csvFilePath = storage_path('app/public/' . $csvFileName);

            $csvFile = fopen($csvFilePath, 'a+');
            fputcsv($csvFile,  $data);
            fclose($csvFile);
            // $csvData = implode(',', $data) . "\n";

            // Storage::disk('public')->append('form-data.csv', $csvData);
    
            return response()->json(['success' =>true, 'message'=>'Contact has been added successfully'],200);
        }

    }
    public function update(Request $request,ContactInformations $contactInformation){

        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:contact_informations,email,'.$request->id,
            'mobile' => 'required|numeric|unique:contact_informations,mobile,'.$request->id,
            'address' => 'required',
            'nationality' => 'required',
            'gender'=>'required|in:Male,Female,Others',
            'dob'=>'required|date|before:today',
            'qualification'=>'required|in:Slc,Plus Two,Bachelor Degree,Master Degree,Phd'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $data = $request->except(['_token','_method','id']);
      
        if($this->contactInformationService->update($contactInformation->id,$data)){
            return response()->json(['success' =>true, 'message'=>'Contact has been updated successfully'],200);
        }

    }
    public function destroy(Request $request, ContactInformations $contactInformation)
    {
        if($contactInformation->delete()){
           
            $message = 'Contact information deleted successfully.';
            return response()->json(['status' => 'ok', 'message' => $message], 200);

        }

        return response()->json(['status' => 'error', 'message' => ''], 422);
    }
}
