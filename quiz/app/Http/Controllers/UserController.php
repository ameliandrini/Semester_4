<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAll(){
    	return User::all();
    }

    public function getById($id){
    	$user = DB::table('users')->select()->where('id',$id)->get();
    	$user['items'] = DB::table('items')->select()->where('user_id', $id)->get();
    	return $user;
    }

    public function add(Request $request){
    	DB::table('users')->insert([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => $request->password
    	]);
    }

    public function update(Request $request, $id){
    	DB::table('users')->where('id', $id)->update([
    		'name' => $request->name,
    		'email' => $request->email
    	]);
    }

    public function delete(Request $request, $id){
    	DB::table('users')->where('id', $id)->delete();
    }
}