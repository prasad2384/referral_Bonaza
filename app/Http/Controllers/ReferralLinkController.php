<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Referral_links;
use App\Models\User;
use Illuminate\Http\Request;

class ReferralLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category = Category::all();
        $user = User::all();
        $referral_links = Referral_links::all();

        return view('admin.pages.ReferrallinksList', compact('category', 'user', 'referral_links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::all();
        $user = User::all();
        return view('admin.pages.AddREferrallinks', compact('category', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $category_id = $request->get('category_id');
        $user_id = $request->get('user_id');
        $referral_url = $request->get('referral_url');
        $display_name = $request->get('display_name');
        $canonicalized_name = $request->get('canonicalized_name');
        $promo_terms = $request->get('promo_terms');
        $promo_terms_url = $request->get('promo_terms_url');
        $promo_expiration_date = $request->get('promo_expiration_date');
        $expected_payout = $request->get('expected_payout');
        $referee_share_percentage = $request->get('referee_share_percentage');
        $referral_share_percentage = $request->get('referral_share_percentage');
        $platform_percentage = $request->get('platform_percentage');
        $status = $request->get('status') ?? "Pending";
        $expected_days = $request->get('expected_days');

        $referral_links = Referral_links::create([
            'category_id' => $category_id,
            'user_id' => $user_id,
            'referral_url' => $referral_url,
            'display_name' => $display_name,
            'canonicalized_name' => $canonicalized_name,
            'promo_terms' => $promo_terms,
            'promo_terms_url' => $promo_terms_url,
            'promo_expiration_date' => $promo_expiration_date,
            'expected_payout' => $expected_payout,
            'referee_share_percentage' => $referee_share_percentage,
            'referral_share_percentage' => $referral_share_percentage,
            'platform_percentage' => $platform_percentage,
            'expected_days' => $expected_days,
            'logo' => $logo,
            'status' => $status,
        ]);
        return response()->json(['success' => true, 'message' => 'Referral Link Create Successfully'], 201);
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
        $user = User::all();
        $category = Category::all();
        $data = Referral_links::find($id);
        return view('admin.pages.EditReferrallinks', compact('user', 'category', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $category_id = $request->get('category_id');
        $user_id = $request->get('user_id');
        $referral_url = $request->get('referral_url');
        $display_name = $request->get('display_name');
        $canonicalized_name = $request->get('canonicalized_name');
        $promo_terms = $request->get('promo_terms');
        $promo_terms_url = $request->get('promo_terms_url');
        $promo_expiration_date = $request->get('promo_expiration_date');
        $expected_payout = $request->get('expected_payout');
        $referee_share_percentage = $request->get('referee_share_percentage');
        $referral_share_percentage = $request->get('referral_share_percentage');
        $platform_percentage = $request->get('platform_percentage');
        $status = $request->get('status');
        $expected_days = $request->get('expected_days');
        $referral_links = Referral_links::find($id);
        if ($referral_links) {
            $data = [

                'category_id' => $category_id,
                'user_id' => $user_id,
                'referral_url' => $referral_url,
                'display_name' => $display_name,
                'canonicalized_name' => $canonicalized_name,
                'promo_terms' => $promo_terms,
                'promo_terms_url' => $promo_terms_url,
                'promo_expiration_date' => $promo_expiration_date,
                'expected_payout' => $expected_payout,
                'referee_share_percentage' => $referee_share_percentage,
                'referral_share_percentage' => $referral_share_percentage,
                'platform_percentage' => $platform_percentage,
                'expected_days' => $expected_days,
                'status' => $status,
            ];
            if ($request->hasFile('logo')) {
                // Upload the new logo
                $file = $request->file('logo');
                $filename = $file->getClientOriginalName();
                $destinationPath = public_path('images');
                $file->move($destinationPath, $filename);
                $data['logo'] = $filename;
            }
            $referral_links->update($data);
            return response()->json(['success' => true, 'message' => 'Referral Link Update Successfully']);
        }
        return response()->json(['success' => false, 'message' => 'Referral Link Not Found']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Referral_links::find($id);
        $data->delete();
        return response()->json(['success' => true, 'message' => 'Referral Link Deleted Successfully']);
    }
}
