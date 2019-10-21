<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


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
        $id = Auth::user()->id;
        $this->validate($request, [
            'name' => 'required | min:3 | max:200',
            'user_name' => 'required | min:4 | max:200 ',
            'email' => 'required | email ',



             'email' => ['required', 'email', Rule::unique('users', 'email')->ignore(auth()->user()->id)],
            'user_name' => ['required', Rule::unique('users', 'user_name')->ignore(auth()->user()->id)],

        ], [

            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'El nombre ha de tener al menos 3 caracteres',
            'name.max' => 'El nombre ha de tener como maximo 200 caracteres',
            'user_name.required' => 'El nombre de usuario es obligatorio',
            'user_name.min' => 'El nombre de usuario ha de tener al menos 5 caracteres',
            'user_name.max' => 'El nombre de usuario ha de tener como maximo 200 caracteres',
            'user_name.unique' => 'El nombre de usuario debe ser unico',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email debe ser un email.',
            'email.unique' => 'Ese email ya existe.'

        ]);
        
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->save();

        return redirect('home')->with('status', 'Profile updated!');
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
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users');

    }



    // public function destroy(Category $category)
    // {
    //     $category->products()->update(['category_id' => null]);

    //     $category->delete();

    //     return redirect('admin/categories');
    // }

    public function table_users()
    {

        $users = User::sortable ()->paginate ( 10 );
        return view ( 'user.table', compact ( 'users' ) );

    }

    
}
