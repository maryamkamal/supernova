<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['name','phone','email'];

protected $hidden = ['remember_token','timestamps'];

public function saveStudent($data)
    {

        $this->name = $data['name'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->save();
		
        return 1;
    }
}
