<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;

class AddressController extends Controller
{
    public function insert(){
        $user = User::findOrFail(1);
        $address = new Address(['name'=>'2344 Paulina av. NY NY 11218']);
        $user->address()->save($address);
        return 'Success';
    }

    public function update(){
        $address = Address::whereUserId(1)->first();
        $address->name = "4321 Updated av. AL";
        $save_success = $address->save();
        if($save_success)
            return "Successfully Updated";
        else
            return "There was a problem";
    }
}
