<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $user;

	public function __construct(UserModel $user) {
		$this->user = $user;
	}

    public function register(Request $request) {
    	$user = [
    		"name"		=> $request->name,
    		"email"		=> $request->email,
    		"password" 	=> md5($request->password) // encryption
    	];

 		/* UserModel::save($user); // <- double colon - access globally */
    	
 		DB::table('user_models')->insert($user);

    	// $user = $this->user->create($user); // access locally using depedency injection

    	/* ERROR HANDLING */
    	if ($user) {
    		return "Sucessfully created";
    	}
    	else{
    		return "Failed";
    	}


    }

    public function getUsers(){
        // $users = DB::table('Users')->get();

        // return view('users')->with('users', $users);

        $users = $this->user->all();

        return view("users")->with('users', $users); // 'members' is variable name with $users values
    
    }

    public function delete($id){

    	DB::table('user_models')->where('id', $id)->delete();
    }

    public function update(Request $request, $id){

        DB::table('user_models')->where('id', $id)->update(['name' => $request->name, 'email'=>$request->email]);
    }

    public function getUser($id){

        $user = DB::table('user_models')->select()->where('id', $id)->get();

        return view("edit", compact('user'));
        // return $user;
    }
}
