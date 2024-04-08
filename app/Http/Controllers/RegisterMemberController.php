<?php

namespace App\Http\Controllers;

use App\Models\RegisterMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function show(int $id)
    {
        $register = RegisterMember::findOrFail($id);

        return view('show-member', ['register'=>$register]);
    }

    public function delete(int $id)
    {

        $response = RegisterMember::findOrFail($id)->delete();



        return redirect('/visualizar_socio')->with('msg', 'Sócio excluído com sucesso.');


    }

    public function update(Request $request)
    {
//        dd($request->all());
        DB::table('register_members')
            ->where('id', $request['id'])
            ->update(
                [
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'cellphone' => $request['cellphone'],
                    'status' => $request['status'],
                    'zipcode' => $request['zipcode'],
                    'address' => $request['address'],
                    'addressNumber' => $request['addressNumber'],
                    'addressComplement' => $request['addressComplement'],
                    'neighborhood' => $request['neighborhood'],
                    'city' => $request['city'],
                    'state' => $request['state'],
                ]
            );

        return redirect('/visualizar_socio')->with('msg', 'Dados alterados com sucesso.');
    }


}
