<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Image;
use Storage;
use App\Company;
use Auth;
use Session;
use View;

class ImageController extends Controller
{
    public function getImage()
    {
      return view('upload-images');
    }

    public function postImage(Request $request)
    {

        //$photo= null;
        $file = array('photo' => $request->file('image_file'));
        // setting up rules
        $rules = array('photo' => 'required|image|max:10000'); //mimes:jpeg,bmp,png and for max size max:10000
         // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
        // send back to the page with the input data and errors
         return redirect()->back()->withErrors(["photo" => "Photo requirments - format: jpg, jpeg, png | max. size: 1 MB"]);
         
        }
        else {
    // checking file is valid.
        if ($request->file('image_file')->isValid()) {
        $destinationPath = public_path().'/uploads'; // upload path
        $extension = $request->file('image_file')->getClientOriginalExtension(); 

        // getting image extension
        $photo  = 'name.'.$extension; // renameing image
         $request->file('image_file')->move($destinationPath, $photo); 
        
         //Image::make($request->file('image_file'))->resize(300, 200)->save('uploads/name.'.$extension);
         return "it worked";
         }
        else {
      return redirect()->back()->withErrors(["image_file" => "Photo requirments - format: jpg, jpeg, png | max. size: 1 MB"]);


        }
      }
    }

public function profileImage(Request $request)
    {

        //$photo= null;
        $file = array('photo' => $request->file('image_file'));
        // setting up rules

          $messages = array(
        'max'=>'The photo must be under 1 mgb',
        'image'=>'The photo must be under 1 mgb',

       );

        $rules = array('photo' => 'required|image|max:10000'); //mimes:jpeg,bmp,png and for max size max:10000
         // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules , $messages );
        if ($validator->fails()) {
        // send back to the page with the input data and errors

            $rows[] = array("error" => '1',"errors" => $validator->errors());
            return \Response::json($rows);         
        }
        else {
    // checking file is valid.
        if ($request->file('image_file')->isValid()) {
        $destinationPath = public_path().'/uploads/profileImages/'; // upload path
        $extension = $request->file('image_file')->getClientOriginalExtension(); 

        // getting image extension
        $user = Auth::user();
        $name = $user->lastName . "_" .  $user->id .'.';
        $photo  = $name.$extension; // renameing image
         $request->file('image_file')->move($destinationPath, $photo); 
        
        $user->profile_img = "uploads/profileImages/".$photo;
        $user->save();

            $rows[] = array("success" => '1',"imagePath" => $destinationPath.$photo);
            return \Response::json($rows);
         //Image::make($request->file('image_file'))->resize(300, 200)->save('uploads/name.'.$extension);
         }
        else {


            $rows[] = array("error" => '1',"errors" => $validator->errors());
            return \Response::json($rows);


        }
      }
    }


	public function companyImage(Request $request)
    {

        //$photo= null;
        $file = array('photo' => $request->file('image_file2'));
        // setting up rules

          $messages = array(
        'max'=>'The photo must be under 1 mgb',
        'image'=>'The photo must be under 1 mgb',

       );

        $rules = array('photo' => 'required|image|max:10000'); //mimes:jpeg,bmp,png and for max size max:10000
         // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules , $messages );
        if ($validator->fails()) {
        // send back to the page with the input data and errors

            $rows[] = array("error" => '1',"errors" => $validator->errors());
            return \Response::json($rows);         
        }
        else {
    // checking file is valid.
        if ($request->file('image_file2')->isValid()) {
        $destinationPath = public_path().'/uploads/companyImages/'; // upload path
        $extension = $request->file('image_file2')->getClientOriginalExtension(); 

        // getting image extension
        $business_Session =  \Request::session()->get('business_Session');
		$company = \Request::session()->get('companyProfile');
        $name = $company->name . "_" .  $company->id .'.';
        $photo  = $name.$extension; // renameing image
         $request->file('image_file2')->move($destinationPath, $photo); 
        
        $company->company_img = "uploads/companyImages/".$photo;
        $company->save();

            $rows[] = array("success" => '1',"imagePath" => $destinationPath.$photo);
            return \Response::json($rows);
         //Image::make($request->file('image_file'))->resize(300, 200)->save('uploads/name.'.$extension);
         }
        else {


            $rows[] = array("error" => '1',"errors" => $validator->errors());
            return \Response::json($rows);


        }
      }
    }

}