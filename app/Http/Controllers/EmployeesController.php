<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;
class EmployeesController extends Controller
{
    //
    public function getList(){
    	$employees = Employees::All();
    	return view('admin.employees.list',compact('employees'));
    }
    public function getAdd(){
    	return view('admin.employees.add');
    }
    public function postAdd(Request $request){
    	$this->validate($request,[
    		// 'LoaiTin'=>'required',
    		'email'=>'unique:employees,email'
    		]
            ,
    		[
    		'email.unique'=>'Email đã tồn tại'
    	]);
    	$employees = new Employees;
    	$employees->email = $request->email;
    	$employees->password = bcrypt($request->password);
    	$employees->level = $request->level;
    	$employees->dob = $request->dob;
    	$employees->gender = $request->gender;
    	$employees->phone_number = $request->phone_number;
    	$employees->address = $request->address;
    	$employees->employee_name = $request->employee_name;
    	if($request->hasFile('avatar'))
    	{
    		$file = $request->file('avatar');
    		$duoi = $file->getClientOriginalExtension();
    		// if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
    		// 	return redirect('admin/slide/them')->with('loi','Bạn chỉ đc chọn file có đuôi jpg,png,jpeg');
    		// }
    		$name = $file->getClientOriginalName();
    		$avatar = str_random(6)."_".$name;
    		while (file_exists("public/upload/avatar".$avatar)){
    			$avatar = str_random(6)."_".$name;
    		}
    		$file->move("public/upload/avatar",$avatar);
    		$employees->avatar = $avatar;
    	}else{
    		$employees->avatar = "";
    	}
    	
    	$employees->save();
    	return redirect('admin/employees/add')->with('report','Add sussess');
    }
    public function getEdit($id){
    	$employees = Employees::where('employee_id','=',$id)->get()->first();
    	return view('admin.employees.edit',compact('employees'));
    }
    public function postEdit(Request $request,$id){
    	$employees = new Employees;
    	$employees = Employees::where('employee_id','=',$id)->get()->first();
    	//     	$this->validate($request,[
    	// 	'email'=>'unique:employees,email'
    	// 	]
     //        ,
    	// 	[
    	// 	'email.unique'=>'Email đã tồn tại'
    	// ]);
    	
    	$employees->email = $request->email;
    	if ($request->has('password')){
    		$employees->password = bcrypt($request->password);
    	}
    	
    	$employees->level = $request->level;
    	$employees->dob = $request->dob;
    	$employees->gender = $request->gender;
    	$employees->phone_number = $request->phone_number;
    	$employees->address = $request->address;
    	$employees->employee_name = $request->employee_name;
    	if($request->hasFile('avatar'))
    	{
    		$file = $request->file('avatar');
    		$duoi = $file->getClientOriginalExtension();
    		// if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
    		// 	return redirect('admin/slide/them')->with('loi','Bạn chỉ đc chọn file có đuôi jpg,png,jpeg');
    		// }
    		$name = $file->getClientOriginalName();
    		$avatar = str_random(6)."_".$name;
    		while (file_exists("public/upload/avatar".$avatar)){
    			$avatar = str_random(6)."_".$name;
    		}
    		$file->move("public/upload/avatar",$avatar);
    		unlink("public/upload/avatar/".$employees->avatar);
    		$employees->avatar = $avatar;
    	}
    	
    	$employees->save();
    	return redirect('admin/employees/edit/'.$id)->with('report','Add sussess');
    }
    public function getDelete($id){
    	$employees = Employees::where('employee_id','=',$id)->get()->first();
    	unlink("public/upload/avatar/".$employees->avatar);
    	$employees->delete();
    	return redirect('admin/employees/list')->with('report','Delete Sussess');
    }
}
