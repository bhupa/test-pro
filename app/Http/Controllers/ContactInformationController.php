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
           
            return DataTables::of($contacts)
            ->addIndexColumn()
            ->addColumn('name',function($q){
                return $q->name;
               })
                 ->addColumn('email',function($q){
                  return $q->email;
                 })
                 ->addColumn('mobile',function($q){
                    return $q->mobile;
                 })
                 ->addColumn('address',function($q){
                    return $q->address;
                 })
                 ->addColumn('gender',function($q){
                 
                  return $q->gender;
                 })
                 ->addColumn('qualification',function($q){
                  return $q->qualification;
               })
              
             ->addColumn('nationality',function($q){
                return $q->nationality;
             })
            
                
                 ->addColumn('action',function($row){
                  
                    $btn ='<a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye"></i></a>';
                    $btn .='<a class="btn btn-info btn-sm contact-edit" href="javascript:void(0)" data-url="'.route('contact-informations.update',$row->id).'" data-id="'.$row->id.'" data-name="'.$row->name.'"  data-email="'.$row->email.'"  data-address="'.$row->address.'"  data-mobile="'.$row->mobile.'"  data-dob="'.$row->dob.'"  data-gender="'.$row->gender.'"  data-nationality="'.$row->nationality.'"  data-qualification="'.$row->qualification.'"><i class="fas fa-pencil-alt"></i></a>';
                    $btn .='<a class="btn btn-danger btn-sm contact-info-delete" data-url="'.url('contact-informations/'.$row->id).'"  href="javascript:void(0)"><i class="fas fa-trash"></i></a>';
                    return $btn;
                   
               })
               ->rawColumns(['name','email','gender','mobile','qualification','address','nationality','action'])
               ->make(true);
      
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
