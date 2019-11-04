<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function showAction($id){
        $user = User::find($id);
        return view('updateuser', ['user' => $user]);
    }


    public function updateUserAction(Request $request, $id){
        $user = User::find($id);
        $user->update([
            "fname" => $request->input('fname'),
            "lname" => $request->input('lname'),
            "email" => $request->input('email'),
            "age" => $request->input('age'),        
        ]);
        return redirect()->route('users');
    }

    public function insertAction(Request $request){
        $user = new User();
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email'); 
        $user->age = $request->input('age');
        $user->save();
        return response()->view("adduser");
    }

    public function deleteAction($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }

    public function showAllAction(){
        $users = User::all();
        return view("users", ['users' => $users]);
    }

    public function addUserForm(){
        return view('adduser');
    }

}
