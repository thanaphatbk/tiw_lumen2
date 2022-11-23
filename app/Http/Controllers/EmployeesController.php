<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function index()
    {
        $data = Employees::all();

        $json_data = [
            'status' => 'OK',
            'date' => date("Y/m/d"),
            'data' => $data,
        ];
        return response()->json($json_data);

    }

    public function create(Request $p_request)
    {
        $name = $p_request->name;
        $obj_emp = new Employees();
        
        $obj_emp->name = $name;
        $obj_emp->save();


        $json_data = [
            'status' => 'OK',
            'date' => date("Y/m/d"),
        ];
        return response()->json($json_data);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $name = $request->name;

        $obj_data = Employees::find($id);
        $obj_data->name = $name;
        $obj_data->save();

        $json_data = [
            'status' => 'OK',
            'date' => date("Y/m/d"),
            'data' => $obj_data
        ];
        return response()->json($json_data);

    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $obj_data = Employees::find($id);
        $obj_data->delete();
        $json_data = [
            'status' => 'OK',
            'date' => date("Y/m/d"),
            'text' => 'Delete completed successfully'
        ];
        return response()->json($json_data);
    }
}
