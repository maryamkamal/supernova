<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Customer extends Model
{
    protected $fillable=['name','phone','email'];


public function saveCustomer($data)
    {

        $this->name = $data['name'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->save();
		
        return 1;
    }

}
