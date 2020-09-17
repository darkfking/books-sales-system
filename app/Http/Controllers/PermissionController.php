<?php




namespace App\Http\Controllers;




use Illuminate\Http\Request;


use App\Permission;




class PermissionController extends Controller


{


/**


     * Display a listing of the resource.


     *


     * @return \Illuminate\Http\Response


     */


public function index()


{


$permissions = Permission::all();


return view('manage.permissions.index')->withPermissions($permissions);


}




/**


     * Show the form for creating a new resource.


     *


     * @return \Illuminate\Http\Response


     */


public function create()


{


return view('manage.permissions.create');


}




/**


     * Store a newly created resource in storage.


     *


     * @param  \Illuminate\Http\Request  $request


     * @return \Illuminate\Http\Response


     */


public function store(Request $request)


{




$this->validateWith([


'display_name' => 'required|max:150',


'name' => 'required|max:100|alphadash|unique:permissions,name',


'description' => 'sometimes|max:200'


]);




$permission = new Permission();


$permission->name = $request->name;


$permission->display_name = $request->display_name;


$permission->description = $request->description;


$permission->save();




return redirect()->route('permissions.index');




}

public function show($id)
{

$permission = Permission::findOrFail($id);


return view('manage.permissions.show')->withPermission($permission);


}

public function edit($id)
{
    $permission = Permission::findOrFail($id);
    return view('manage.permissions.edit')->withPermission($permission);
}

public function update(Request $request, $id)
{
    $this->validateWith([
    'display_name' => 'required|max:150',
    'description' => 'sometimes|max:200'
    ]);

    $permission = Permission::findOrFail($id);
    $permission->display_name = $request->display_name;
    $permission->description = $request->description;
    $permission->save();

    return redirect()->route('permissions.show', $id);
}

/**


     * Remove the specified resource from storage.


     *


     * @param  int  $id


     * @return \Illuminate\Http\Response


     */
public function destroy($id)
{

    //
}
}