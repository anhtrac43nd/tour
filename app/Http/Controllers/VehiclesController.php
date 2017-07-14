<?php

namespace App\Http\Controllers;
use App\Vehicles;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    //
    public function getAdd(){
    	return view('admin.vehicles.add');
    }
    public function postAdd(Request $request){
    	$vehicles = new Vehicles;
    	$vehicles->vehicle_name = $request->vehicle_name;
    	if($request->hasFile('vehicle_image'))
    	{
    		$file = $request->file('vehicle_image');
    		$duoi = $file->getClientOriginalExtension();
    		// if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
    		// 	return redirect('admin/slide/them')->with('loi','Bạn chỉ đc chọn file có đuôi jpg,png,jpeg');
    		// }
    		$name = $file->getClientOriginalName();
    		$image = str_random(9)."_".$name;
    		while (file_exists("public/upload/vehicle".$image)){
    			$image = str_random(9)."_".$name;
    		}
    		$file->move("public/upload/vehicle",$image);
    		$vehicles->vehicle_image = $image;
    	}else{
    		$vehicles->vehicle_image = "";
    	}
    	$vehicles->save();
    	return redirect('admin/vehicles/add')->with('report','Add sussess');
    }
    public function getList(){
    	$vehicles = Vehicles::all();
    	return view('admin.vehicles.list',compact('vehicles'));
    }
    public function getEdit($id){
    	$vehicles = Vehicles::find($id);
    	return view('admin.vehicles.edit',compact('vehicles'));
    }
    public function postEdit(Request $request,$id){
    	$vehicles = new Vehicles;
    	$vehicles = Vehicles::find($id);
    	$vehicles->vehicle_name = $request->vehicle_name;
    	if($request->hasFile('vehicle_image'))
    	{
    		$file = $request->file('vehicle_image');
    		$duoi = $file->getClientOriginalExtension();
    		// if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
    		// 	return redirect('admin/slide/them')->with('loi','Bạn chỉ đc chọn file có đuôi jpg,png,jpeg');
    		// }
    		$name = $file->getClientOriginalName();
    		$image = str_random(9)."_".$name;
    		while (file_exists("public/upload/vehicle".$image)){
    			$image = str_random(9)."_".$name;
    		}
    		$file->move("public/upload/vehicle",$image);
    		unlink("public/upload/vehicle/".$vehicles->vehicle_image);
    		$vehicles->vehicle_image = $image;
    	}
    	$vehicles->save();
    	return redirect('admin/vehicles/edit/'.$id)->with('report','Add sussess');
    }
    
}
