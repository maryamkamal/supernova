<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Course;
//use Mail;

class StudentController extends Controller
{
	
    public function store(Request $request)
    {
		
        $student = new Student;
                                           // insert student data in students table
        $data = $this->validate($request, [
            'name'=>'required',
			'phone'=>'required',
            'email'=>'required',
            
        ]);

        $student->saveStudent($data);
		
		                             
		/*$name=$student->name;
		$email=$student->email;		
     
$data = array('name'=>$name, "body" => "This is my first Online Email.");
  Mail::send('emails.mail', $data, function($message) use ($name, $email) {
    $message->to($email, $name)
            ->subject(' Web Testing Mail');
    $message->from('kamalmary04@yahoo.com','SuperNova');
});*/
  return redirect('courses')->with('success','your data successfully enrollrd');
}
}
