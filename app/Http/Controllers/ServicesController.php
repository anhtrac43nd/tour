<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
class ServicesController extends Controller
{
    //
    public function getAdd(){
    	return view('admin.services.add');
    }
    public function postAdd(Request $request){
    	$services = new Services;
    	$services->service_name = $request->service_name;
    	$services->detail = $request->detail ;
    	if($request->hasFile('service_icon'))
    	{
    		$file = $request->file('service_icon');
    		$duoi = $file->getClientOriginalExtension();
    		// if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
    		// 	return redirect('admin/slide/them')->with('loi','Bạn chỉ đc chọn file có đuôi jpg,png,jpeg');
    		// }
    		$name = $file->getClientOriginalName();
    		$icon = str_random(9)."_".$name;
    		while (file_exists("public/upload/icon".$icon)){
    			$icon = str_random(9)."_".$name;
    		}
    		$file->move("public/upload/icon",$icon);
    		$services->service_icon = $icon;
    	}else{
    		$services->service_icon = "";
    	}
    	$services->save();
    	return redirect('admin/services/add')->with('report','Add sussess');
    }
    public function getList(){
    	$services = Services::All();
    	return view('admin.services.list',compact('services'));
    }
    public function getEdit($id){
    	$services = services::find($id);
    	return view('admin.services.edit',compact('services'));
    }
    public function postEdit(Request $request,$id){
    	$services = new Services;
    	$services = Services::find($id);
    	$services->service_name = $request->service_name;
    	$services->detail = $request->detail ;
    	if($request->hasFile('service_icon'))
    	{
    		$file = $request->file('service_icon');
    		$duoi = $file->getClientOriginalExtension();
    		// if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
    		// 	return redirect('admin/slide/them')->with('loi','Bạn chỉ đc chọn file có đuôi jpg,png,jpeg');
    		// }
    		$name = $file->getClientOriginalName();
    		$icon = str_random(9)."_".$name;
    		while (file_exists("public/upload/icon".$icon)){
    			$icon = str_random(9)."_".$name;
    		}

    		$file->move("public/upload/icon",$icon);
    		unlink("public/upload/icon/".$services->service_icon);
    		$services->service_icon = $icon;
    	}
    	$services->save();
    	return redirect('admin/services/edit/'.$id)->with('report','Add sussess');
    }
    public function getDelete($id){
    	$services = Services::find($id);
    	unlink("public/upload/icon/".$services->service_icon);
    	$services->delete();
    	return redirect('admin/services/list')->with('report','Delete Sussess');
    }
}
