<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class UsersController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }
    
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
        $this->validate($request, [
            'name' => 'required | min:3 | max:200',
            'user_name' => 'required | min:4 | max:200 |unique:users,user_name,',
            // 'email' => 'required | email ',
            'email' => 'required|email|unique:users,email,',
            'money' => 'numeric|required|min:0|max:99999999',
            'name_myteam' =>'required | min:4 | max:200 |unique:users,name_myteam,',
            // 'password' => 'same:password_confirmation'
            'password' => ['required', 
            'min:6', 
            'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/', 
            'confirmed']
        
            ]);

            $user = new User();
            $user->name = $request->input('name');
            $user->user_name = $request->input('user_name');
            $user->email = $request->input('email');
            $user->money = $request->input('money');
            $user->name_myteam = $request->input('name_myteam');
            $user->password = bcrypt($request->input('password'));
            $user->save();
            return redirect('/users');
        
        
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

            // 'name.required' => '{{ __("menu.name_required")}}',
            // 'name.min' => 'El nombre ha de tener al menos 3 caracteres',
            // 'name.max' => 'El nombre ha de tener como maximo 200 caracteres',
            // 'user_name.required' => 'El nombre de usuario es obligatorio',
            // 'user_name.min' => 'El nombre de usuario ha de tener al menos 5 caracteres',
            // 'user_name.max' => 'El nombre de usuario ha de tener como maximo 200 caracteres',
            // 'user_name.unique' => 'El nombre de usuario debe ser unico',
            // 'email.required' => 'El email es obligatorio',
            // 'email.email' => 'El email debe ser un email.',
            // 'email.unique' => 'Ese email ya existe.'

        ]);
        
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->save();

        return redirect('home')->with('status', 'Profile updated!');
    }

    public function edit_my_user(){
        return view ('user.edit_user');
    }

    public function edit_user(User $user){

        return view('user.edit', compact('user'));



        // return view ('user.edit');
    }

    public function show_my_user(){
        return view ('user.show_user');
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



    public function update_user(Request $request, User $user)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required | min:3 | max:200',
            'user_name' => 'required | min:4 | max:200 |unique:users,user_name,'.$user->id,
            // 'email' => 'required | email ',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'money' => 'numeric|required|min:0|max:99999999',



            // 'email' => ['required', 'email', Rule::unique('users', 'email')->ignore(auth()->user()->id)],
            // 'user_name' => ['required', Rule::unique('users', 'user_name')->ignore(auth()->user()->id)],

        ], [

            // 'name.required' => 'El nombre es obligatorio',
            // 'name.min' => 'El nombre ha de tener al menos 3 caracteres',
            // 'name.max' => 'El nombre ha de tener como maximo 200 caracteres',
            // 'user_name.required' => 'El nombre de usuario es obligatorio',
            // 'user_name.min' => 'El nombre de usuario ha de tener al menos 5 caracteres',
            // 'user_name.max' => 'El nombre de usuario ha de tener como maximo 200 caracteres',
            // 'user_name.unique' => 'El nombre de usuario debe ser unico',
            // 'email.required' => 'El email es obligatorio',
            // 'email.email' => 'El email debe ser un email.',
            // 'email.unique' => 'Ese email ya existe.',
            // 'money.required' => 'El dinero es obligatorio',
            // 'money.numeric' => 'El campo dinero solo admite numeros',



        ]);
        
        // $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->money = $request->input('money');
        $user->save();

        return redirect('home')->with('status', 'Profile updated!');
    }

    public function table_users()
    {

        $users = User::sortable ()->paginate ( 10 );
        return view ( 'user.table', compact ( 'users' ) );

    }

    public function new_user(){
        return view ('user.new_user');
    }

    
}
