<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("frontend.users.connexion");
    }
    public function register(){
        return view("frontend.users.inscription");
    }

    public function authenticate(Request $request,User $user){
       
        $credentials = $request->only('email','mdp'); 
        $login = $request->email;
        $request->validate([
            'email'=>'required|email',
            'mdp'=>'required'
        ]);
      
        if(\App\Models\User::where('email',$login)->count() > 0 ) {
            if(Auth::attempt(['email'=>$login,'password'=>$request->mdp])){
                //return redirect()->route('dashboard');
                return 'Connexion reussi avec success';
            }else{
                return redirect()->back()->with('success',"Vos identifiants ne correspondent pas !!!");
            }
        }else{
            return redirect()->back()->with('success',"Vos identifiants ne correspondent pas !!!");
        }

    }

    public function registerUser(Request $request){
        $data = $request->validate([
            'nom'=>'required|string',
            'prenoms'=>'required|string',
            'email'=>'required|email',
            'telephone'=>'required|string',
            'adresse'=>'required|string',
            'titre'=>'required|string',
            'mdp'=>'required|string|min:8',
            'c_mdp' => 'required_with:mdp|same:mdp|min:8'
       
        ]);
        //dd($request->all());
        $data['mdp'] = bcrypt($data['mdp']);
        User::create($data);
        return redirect()->back()->with('success',"Nouveau compte creer avec success !!!");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
