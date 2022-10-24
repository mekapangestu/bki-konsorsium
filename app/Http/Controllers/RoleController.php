<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $roles = Role::all();
        return view('admin.role.index', compact('roles', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(Auth::id());
        $model = new Role();
        return view('admin.role.create', compact('model', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $model = new Role();
            $model->name = $request->name;
            $model->guard_name = "web";
            $model->save();

            return redirect('role')->with('success', 'Data Role Baru Berhasil Ditambahkan');
        } catch (\Exception $e) {
            return redirect('role')->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $roles)
    {
        $user = User::find(Auth::id());
        return view('admin.role.index', ['roles' => $roles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find(Auth::id());
        $role = Role::find($id);
        return view('admin.role.edit', compact('role', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $model = Role::find($id);
            $model->name = $request->name;
            $model->save();

            return redirect('role')->with('success', 'Data Role Berhasil Diupdate');
        } catch (\Exception $e) {
            return redirect('role')->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Role::find($id);
        $model->delete();
        return redirect('role')->with('error', 'Data Role Berhasil Dihapus');
    }
}
