<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::orderBy('created_at','desc')->get();
        return view('vendors.vendor')->with('vendors',$vendors);
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'vendor_type'=>'required',
            'supplier_name'=>'required',
            'supplier_phone'=>'required'
        ]);

        try {
            Vendor::create([
                'vendor_type' => $request->vendor_type,
                'company_name' => $request->company_name,
                'company_phone' => $request->company_phone,
                'company_email' => $request->company_email,
                'company_website' => $request->company_website,
                'company_address' => $request->company_address,
                'company_postal_code' => $request->company_postal_code,
                'supplier_name' => $request->supplier_name,
                'supplier_phone' => $request->supplier_phone,
                'supplier_email' => $request->supplier_email,
                'supplier_nid' => $request->supplier_nid,
                'supplier_trade_licence' => $request->supplier_trade_licence,
                'supplier_etin' => $request->supplier_etin,
            ]);

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('warning', 'Vendor Creation Failed.');
        }
        return back()->with('success','Vendor Creation Success.');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        try {
            Vendor::findOrFail($id)->update([
                'vendor_type' => $request->vendor_type,
                'company_name' => $request->company_name,
                'company_phone' => $request->company_phone,
                'company_email' => $request->company_email,
                'company_website' => $request->company_website,
                'company_address' => $request->company_address,
                'company_postal_code' => $request->company_postal_code,
                'supplier_name' => $request->supplier_name,
                'supplier_phone' => $request->supplier_phone,
                'supplier_email' => $request->supplier_email,
                'supplier_nid' => $request->supplier_nid,
                'supplier_trade_licence' => $request->supplier_trade_licence,
                'supplier_etin' => $request->supplier_etin,
            ]);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('warning', 'Vendor Update Failed.');
        }
        return back()->with('success','Vendor Update Success.');
    }


    public function delete($id)
    {
        Vendor::findOrFail($id)->delete();
        return back()->with('success','Vendor Deleted.');
    }
}
