<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorRequest;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class VendorRequestController extends Controller
{
    public function index()
    {
        $vendor_request = VendorRequest::latest()->get();
        return view('vendor_request',compact('vendor_request'));
    }
    public function store(Request $request)
    {
        $userId = auth()->id();
        VendorRequest::updateOrCreate([
            'user_id'=>$userId,
        ]);
        return redirect("/")->with('success','Vendor Request Sent');
    }

    public function grantVendor(Request $request){
        $userId = $request->user_id;
        $user=User::find($userId);
        $vendor_request=VendorRequest::find($request->vendor_request_id);
        $vendor_request->update([
            'status'=>1,
        ]);
        Vendor::create([
            'user_id'=>$userId,
            'full_name'=>$user->name,
            'email'=>$user->email,
        ]);
        $user->assignRole('Vendor');
        return redirect()->route('vendor-requests')->with('success','Vendor Access Granted');

    }
}
