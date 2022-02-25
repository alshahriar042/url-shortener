<?php

namespace App\Http\Controllers;

use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\VehicleModel\VehicleModelRequest;
use App\Models\VehicleBrand;

class VehicleModelController extends Controller
{
    public function index()
    {
        // $VechileBrands = VehicleBrand::orderBy('id','desc')->get();
        $VehicleBrands = VehicleBrand::with('models')->orderBy('id','desc')->get();

        $VehicleModels = VehicleModel::with('brand')-> orderBy('created_at','desc')->get();

        // dd($VechileBrands);
        return view('vehicle.model')->with([
            'VehicleModels' => $VehicleModels,
            'VehicleBrands'  => $VehicleBrands,
        ]);
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request,[
            'name'=>'required|unique:vehicle_models',
        ]);

        try {
            VehicleModel::create($request->all());
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('warning', 'Vehicle Model Create Failed!');
        }
        return back()->with('success','Vehicle Model Succesfully Created.');
    }



    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|unique:vehicle_models,name',
        ]);
        try {
            VehicleModel::findOrFail($id)->update([
                'name'=> $request->name,
                'vehicle_brand_id' => $request->vehicle_brand_id
            ]);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('warning', 'Vehicle Model Update Failed!');
        }
        return back()->with('success','Vehicle Model Succesfully Updated.');
    }


    public function delete($id)
    {
        VehicleModel::findOrFail($id)->delete();
        return back()->with('success','Vehicle Model Succesfully Deleted.');
    }
}
