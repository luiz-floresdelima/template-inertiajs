<?php

namespace App\Http\Controllers;

use App\Models\GlobalUser;
use Illuminate\Http\Request;

class GlobalUserController extends Controller
{
    public function createIfNotExist(Request $request,string $email){

        $name = $request->input('name') ?? "Luiz";
        $picture = $request->input('picture') ?? "http://www.example.com.br";

        $user = GlobalUser::where([['email', '=', $email]])->first();

        if($user) return response()->json(["detail" => "User already exists"],409);

        $user = GlobalUser::create([
            'name' => $name,
            'email' => $email,
            'picture' => $picture
        ]);

        return response()->json([
            "email" => $user->email,
            "name" => $user->name,
            "created_at" => $user->created_at
        ]);
    }
}
