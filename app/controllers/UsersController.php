<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
	
	/**
	 * User authentication
	 *
	 * @return Response
	 */
	public function login()
	{
		if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))) 
			return Redirect::back()->with('message', 'Vous êtes connecté');
		else 
			return Redirect::back()->with('message', 'Combinaison nom/mot de passe invalide');
	}
	
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/')->with('message', 'Your are now logged out!');	
	}


	/**
	 * Create a new user.
	 *
	 * @return Response
	 */
	public function register()
	{
		$rules = array(
            'username'         => 'required|alpha|min:4',
            'firstname'    => 'required|alpha|min:2',
            'lastname'     => 'required|alpha|min:2',
            'email' 	   => 'required|email|unique:users',
            'password'     => 'required|alpha_num|between:6,12|confirmed',
            'password_confirmation' => 'required|alpha_num|between:6,12'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()) {
           return Redirect::to('/register')
                ->withErrors($validator); 
        } else {
            $user = new User;
            $user->username = Input::get('username');
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->description = Input::get('description');
		    $user->role = 0;
		    $user->save();            
            Session::flash('message', 'Vous êtes bien enregistré');
            return Redirect::back('/');
        }

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
