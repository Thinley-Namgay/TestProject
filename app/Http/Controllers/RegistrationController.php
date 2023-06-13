<?php

namespace App\Http\Controllers;



use App\Models\RoleModel;

use Illuminate\Http\Request;

class RegistrationController extends Registration
{
    public function register()
    {
        return view('register');
    }

    public function create_role(Request $request)
    {
        $role_data = [
            'name' => $request->role_name,
            'status' => $request->status,
            'created_by' => 1,
            'created_at' => date('Y-m-d h:i:s'),
        ];
        
        RoleModel::create($role_data);
        return redirect()->away('get_role_list/ALL/NA/ALL');
    }

    public function get_role_list($param_type,$id,$status){

        if($param_type=='ALL'){
            $response_data=RoleModel::get();
        }
        if($param_type=='BYID'){
            $response_data=RoleModel::where('id', $id)->get();
        }
        if($param_type=='Status'){
            $response_data=RoleModel::where('status', $status)->get();
        }
        
        //select * t_role_master;
        return view('registration/list_roles')->with(compact('response_data'));
    }

    public function edit_role($id){
        $data=RoleModel::where('id',$id)->first();
        return view('edit_role')->with(compact('data'));
    }
    public function delete_role($id){
        RoleModel::where('id',$id)->delete();
        return redirect()->away('/get_role_list/ALL/NA/ALL');
    }
    public function update_role(Request $request){
        $role_data = [
            'name' => $request->role_name,
            'status' => $request->status,
            'updated_by' => 1,
            'updated_at' => date('Y-m-d h:i:s'),
        ];
        
        RoleModel::where('id',$request->record_id)->update($role_data);
        return redirect()->away('get_role_list/ALL/NA/ALL');   
    }
}
