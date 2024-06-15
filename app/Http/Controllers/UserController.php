<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::all();
        return view('admin.Userlist', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.AddUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users'
        ]);
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()]);
        }
        $logo = null;
        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $destinationPath = public_path('images');
            $filePath = $destinationPath . '/' . $filename;
            if (!file_exists($filePath)) {
                $file->move($destinationPath, $filename);
            }
            $logo = $filename;
        }
        $username = $request->get('username');
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $email = $request->get('email');
        $password = $request->get('password');
        $phone = $request->get('phone');
        $about = $request->get('about');
        $status = $request->get('status') ?? 1;

        $user = User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'about' => $about,
            'status' => $status,
            'logo' => $logo,
            'username' => $username
        ]);
        return response()->json(['status' => 'success', 'message' => 'User Create Successfully']);
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
        $data = User::find($id);
        return view('admin.EditUser', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //


        $validation = Validator::make($request->all(), [
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users')->ignore($id)
            ],
            'email' => [
                'required',
                'string',
                'max:255',
                'email',
                Rule::unique('users')->ignore($id)
            ],
        ]);
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()]);
        }

        $user = User::find($id);

        if ($user) {
            $data = [
                'username' => $request->get('username'),
                'firstname' => $request->get('firstname'),
                'lastname' => $request->get('lastname'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'about' => $request->get('about'),
                'status' => $request->get('status')
            ];

            if ($request->hasFile('logo')) {
                // Upload the new logo
                $file = $request->file('logo');
                $filename = $file->getClientOriginalName();
                $destinationPath = public_path('images');
                $file->move($destinationPath, $filename);
                $data['logo'] = $filename;
            }
            $user->update($data);
            return response()->json(['success' => true, 'message' => 'User updated successfully.']);
        }
        return response()->json(['success' => false, 'message' => 'User Not Found']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = User::find($id);
        $data->delete();
        return response()->json(['success' => true, 'message' => 'User Deleted Successfully']);
    }
}
