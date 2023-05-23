<?php
/**
 * Created by PhpStorm.
 * User: Bhupendra Sapkota
 * Date: 23/05/23
 * Time: 10:33 AM
 */

namespace App\Services;

use App\ContactInformations;
use App\Services\Service;
use Yajra\DataTables\DataTables;

class ContactInformationService extends Service
{
    public  function __construct(ContactInformations $contactInformations)
    {
        $this->model = $contactInformations;
    }

    public function ajaxDataCall(){

        $contacts = $this->model->orderBy('created_at','desc')->get();

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
}