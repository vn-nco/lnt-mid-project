<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {   
        
        /*$telephone_number = "08".$request->telephone_number;
        Employee::create($request->except(["_token","submit"]));*/

        $telephone_number = "08".$request->input('telephone_number');
        $data = $request->except(["_token","submit"]);
        $data['telephone_number'] = $telephone_number;
        Employee::create($data);
        
        /*Employee::create($request, [
            'name' => $request->name,
            'age'=> $request->age,
            'address'=> $request->address,
            'telephone_number'=> $request->telephone_number
        ]);*/
        return redirect('/employee');
    }

    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employees.edit', compact('employees'));
    }

    public function update(Request $request, $id)
    {
        /*$employees = Employee::find($id);
        $telephone_number = "08".$request->input('telephone_number');

        $employees->update($request->except(["_token","submit"]));*/

        $employees = Employee::find($id); // Use findOrFail to throw an exception if the employee is not found
        $telephone_number = "08".$request->input('telephone_number'); // Use input method instead of directly accessing the property
        $data = $request->except(["_token","submit"]);
        $data['telephone_number'] = $telephone_number;
        $employees->update($data);

        /*Employee->update($request, [
            'name' => $request->name,
            'age'=> $request->age,
            'address'=> $request->address,
            'telephone_number'=> $request->telephone_number
        ]);*/
        return redirect('/employee');
    }

    public function destroy($id)
    {
        $employees = Employee::find($id);
        $employees->delete();
        return redirect('/employee');
    }
}
