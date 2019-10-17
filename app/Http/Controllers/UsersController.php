<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required | min:3',
            'user_name' => 'required | max:200',
        ], [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'El nombre ha de tener al menos 3 caracteres',
            // 'description.required' => 'La descripción es obligatoria',
            // 'description.max' => 'La descripción no puede tener más de 200 caracteres',
            // 'price.required' => 'El precio es obligatorio',
            // 'price.numeric' => 'El precio debe ser un número',
            // 'price.min' => 'El precio mínimo es cero'

        ]);
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->save();

        return redirect('users')->with('status', 'Profile updated!');
    }

    public function edit_my_user(){
        return view ('user.edit');
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

    public function table_users()
    {

        $users = User::sortable ()->paginate ( 10 );
        return view ( 'user.table', compact ( 'users' ) );

    }

    
}
