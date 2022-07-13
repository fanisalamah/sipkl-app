<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    use HasFactory;
    
    // public function store(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'role_id' => ['required', 'integer', 'max:255'],
    //         'jurusan_id' => ['required', 'integer', 'max:255'],
    //         'password' =>['required', 'string', new Password, 'confirmed'],
    //     ]);
        
    //     if($validator->fails()){
    //         return redirect()->back();
    //     }

    //     try {
    //         User::create($request->all());
    //         return redirect()->back();
    //     } catch (\Exception $e) {
    //         //throw $th;
    //         return redirect()->back()->with('message', $e->getMessage());
    //     }



    // }
}
