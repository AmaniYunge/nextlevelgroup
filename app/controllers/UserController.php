<?php

class UserController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('user.index');
//        $user = User::all();
//        Return View::make("user.list",compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        Return View::make("user.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

                $user = User::create(array(
                    "name"=>Input::get("name"),
                    "phone"=>Input::get("phone"),
                    "email"=>Input::get("email"),
                    "password"=>Input::get("password"),
                ));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return View::make("user.log",  compact("user"));
    }
    public function listUser(){
        return View::make('user.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return View::make('user.edit',  compact("user"));
    }
 public function login()
    {
        return View::make('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $users = User::find($id);
        $users->name = Input::get('name');
        $users->email = Input::get('email');
        $users->phone = Input::get('phone');
        $users->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $name = $user->name;
        $user->status="deleted";
        $user->delete();


    }

    /**
     * authanticate user during login.
     *
     * @return view
     */
    public function validate()
    {
        $user = User::where("email",Input::get('email'))->first();
        if($user && $user->password == Input::get('password')){
            Session::put('id',$user->id);
            Session::put('email',$user->email);
            if(Input::get('keep') == "keep"){
                Auth::login($user,TRUE);
            }else{
                Auth::login($user,FALSE);
            }
            return View::make("home");
        }
        else{
            return View::make("login")->with("error","Incorrect Username or Password");
        }
    }

    /**
     * loging out a user
     *
     * @return view
     */
    public function logout(){
        Auth::logout();
        Session::flush();
        return Redirect::to("login");
    }

}