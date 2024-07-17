<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Referral_links;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FrontendController extends Controller
{
    //
    function index()
    {
        $category = Category::all();
        $referral_links = Referral_links::all();
        return view('frontend.pages.index', compact('category', 'referral_links'));
    }
    function profile_dashboard()
    {
        $data = auth()->user();
        $referral_links_count = Referral_links::where('user_id', '=', $data->id)->count();
        return view('frontend.pages.userProfile', compact('data', 'referral_links_count'));
    }
    function edit_profile_get_details(string $id)
    {
        $data = User::find($id);
        return view('frontend.pages.editprofile', compact('data'));
    }
    function update_profile(string $id, Request $request)
    {

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
                'status' => $request->get('status'),
                'address' => $request->get('address')
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
            return response()->json(['success' => true, 'message' => 'Profile Updated successfully.', 'user' => $user]);
        }
        return response()->json(['success' => false, 'message' => 'User Not Found']);
    }
    function terms_condition(string $id)
    {
        $data = Referral_links::find($id);
        return view('frontend.pages.terms_condition', compact('data'));
    }
    function referral_code()
    {
        return view('frontend.pages.ReferralCode');
    }
    function share_referral()
    {
        return view('frontend.pages.sharerefeeral');
    }
    function how_it_works()
    {
        return view('frontend.pages.how_it_works');
    }
    function user_profile_public(string $id)
    {
        $data = User::find($id);
        if (!$data) {
            return view('frontend.pages.user_profile_public')->with(['error' => 'User not found or User does not exist']);
        }
        $referral_links_count = Referral_links::where('user_id', '=', $data->id)->count();
        $referral_links = Referral_links::where('user_id', '=', $data->id)->paginate(10);
        return view('frontend.pages.user_profile_public',compact('data','referral_links','referral_links_count'));
    }
}
