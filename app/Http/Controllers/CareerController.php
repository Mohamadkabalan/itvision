<?php

namespace App\Http\Controllers;

use App\Career;
use App\Services\FileContent;
class CareerController extends Controller
{

  public function store(){
    try {
      $data=request()->all();
      $file= new fileContent();
      $result=$file->handle('resume');
      if($result){
        $result=json_decode($result,true);
        if(isset($result[0])){
          $contact=new Career();
          $contact->name=$data["name"];
          $contact->email=$data["email"];
          $contact->phone=$data["phone"];
          $contact->position=$data["position"];
          $contact->resume=$result[0]['download_link'];
          $contact->message=$data["message"];
          $contact->save();
          return response()->json(['status'=>200,'message'=>'Your resume has been submitted successfully']);
        }

      }

    }catch (\Exception $e){
      return response()->json(['status'=>500,'message'=>'Resume not sent ,Please contact our support']);
    }
    return response()->json(['status'=>500,'message'=>'Resume not sent ,Please contact our support']);
  }
}