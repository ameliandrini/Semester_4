<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function getAll(){
    	return item::all();
    }

    public function getById($id){
    	$user = DB::table('items')->select()->where('id',$id)->get();
    	
    	return $items;
    }

    public function add(Request $request){
    	DB::table('items')->insert([
    		'user_id' => $request->user_id,
    		'name' => $request->name,
    		'price' => $request->price,
    		'stock' => $request->stock
    	]);
    }

    public function update(Request $request, $id){
    	DB::table('items')->where('id', $id)->update([
    		'user_id' => $request->user_id,
    		'name' => $request->name,
    		'price' => $request->price,
    		'stock' => $request->stock
    	]);
    }

    public function delete(Request $request, $id){
    	DB::table('items')->where('id', $id)->delete();
    }
}