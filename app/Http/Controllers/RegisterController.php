<?php

namespace App\Http\Controllers;

use App\Models\admins;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.register");
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $emailExists = admins::where('email', $email)->exists();

        return response()->json(['emailExists' => $emailExists]);
    }

    public function checkUsername(Request $request)
    {
        $user_name = $request->input('user_name');
        $userNameExists = admins::where('user_name', $user_name)->exists();

        return response()->json(['userNameExists' => $userNameExists]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|unique:admins|min:4',
            'password' => 'required|min:3',
            'full_name' => 'required|min:6',
            'email' => 'required|unique:admins|min:7',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $registerData = new admins();
        $registerData->user_name = $request->user_name;
        $registerData->password = md5($request->password);
        $registerData->full_name = $request->full_name;
        $registerData->email = $request->email;
        $registerData->save();
        return response()->json(['success' => 'Đăng ký thành công']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
