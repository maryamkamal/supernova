<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['fname','lname','email','message'];

protected $hidden = ['remember_token'];


public function saveContact($data)
    {
     
        $this->fname = $data['fname'];
        $this->lname = $data['lname'];
        $this->email = $data['email'];
        $this->message = $data['message'];
        $this->save();
        return 1;
    }


}
