<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Users;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('owner.indexUser')->with
        ([
            'users'=>$users,
        ]);
    }
    public function update($uId ,Request $request)
    {
        $rules = [
            'authority'=>'required|integer',
        ];
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails())
        {
            echo "バリテーションエラー";
            return;
        }
        //権限の更新
        $user = Users::find($uId);
        $user->type = $request->authority;
        $user->save();

        return redirect(action('UserController@index'));
    }
}
