<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRegisterRequest $request)
    {

        $input = $request->except('repeat_password');

        $input['password'] = Hash::make($request->password);

        $user = User::create($input);

        $cookie = Cookie::make('user', $user);

        return redirect('/posts')->withCookie($cookie);
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
    public function update(Request $request, $id)
    {
            //
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

    public function login_page()
    {
        return view('users.login');
    }

    public function login(UserLoginRequest $requests)
    {

        if($user = User::whereName($requests->name)->first())
        {

            if (password_verify($requests->password, $user->password))
            {

                $cookie = Cookie::make('user', $user);

                return redirect('/posts')->withCookie($cookie);

            } else
            {

                session()->flash('invalid_data', 'Invalid email or\and password');

                return view('users.login');

            }

        }else
        {
            session()->flash('invalid_data', 'Invalid email or\and password');

            return view('users.login');
        }
    }

    public function logout()
    {
        $cookie = Cookie::forget('user');

        return redirect('/users')->withCookie($cookie);
    }
}
