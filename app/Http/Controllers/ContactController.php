<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $contact = new Contact;
        $data = $this->validate($request, [
            'fname'=>'required',
			'lname'=>'required',
            'email'=>'required|email',
            'message'=> 'required'
        ]);

        $contact->saveContact($data);
       return back()->with('success', ' Your Message Send Successfully');;

    }

}