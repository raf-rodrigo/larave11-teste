<?php

namespace App\Http\Controllers;

use App\Models\RegisterMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterMemberController extends Controller
{

    public function store(Request $request)
    {

        $register = new RegisterMember();

        $register->user_id = Auth::id();
        $register->name = $request['name'];
        $register->email = $request['email'];
        $register->cellphone = $request['cellphone'];
        $register->status = $request['status'];
        $register->zipcode = $request['zipcode'];
        $register->address = $request['address'];
        $register->addressNumber = $request['addressNumber'];
        $register->addressComplement = $request['addressComplement'];
        $register->neighborhood = $request['neighborhood'];
        $register->city = $request['city'];
        $register->state = $request['state'];

        $register->save();

       return redirect('/home')->with('msg', 'Sócio cadastrado com sucesso.');
    }
}
