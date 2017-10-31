<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\DropYourMessage;
use redirect;
use Input;
use Log;

class HomeController extends Controller
 {
      public function savemessage()
      {
        log::info('aaya');
      $msg=new DropYourMessage();
      $msg->Name= Input::get('name');
      $msg->EmailId= Input::get('email');
      $msg->Subject= Input::get('subject');
      $msg->Message= Input::get('message');
      Log::info($msg->Name);
      Log::info($msg->EmailId);
      Log::info($msg->Subject);
      Log::info($msg->Message);  

      if(Input::get('name')=='' && Input::get('email')==''&& Input::get('message')=='')
      {           
        return redirect()->route('contactuscontactus')->with('message', 'Nothing to submit, Please enter the details!!!');  
      }
      else if(Input::get('message')!='' && Input::get('name')=='' && Input::get('email')=='')
      {
        return redirect()->route('contactus')->with('message', 'Please provide either name or email id!!!');  
      }
      else
      {
        $msg->save();
        return view('contactus')->with('message', 'Your message has been sent. Thank you!');   
      }          
   }
   
}


