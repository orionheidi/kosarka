<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\User;
use App\Team;
use DB;

class LoginController extends Controller
{

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
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
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if(!auth()->attempt(request(['email','password']))){
            return back()->withErrors(['message' => 'Bad credentials. Please try again']);
        }else{
            if(auth()->user()->is_verified){
                return redirect()->route('teams-index');
            }else{
                $this->logout();
                return back()->withErrors(['message' => 'You are not verified, please check your email for verification!']);
            }
        }
        return redirect()->route('teams-index');
    }

    public function verification($verify_token){
        $user = User::where('verify_token', $verify_token)->first();
        $user->is_verified = true;
        // DB::update('update users set email_verified_at = ? where id = ?',[$user->email_verified_at,$user->id]);
        // return $user;
        $user->save();
        return view('auth.verification',compact('user'));
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
}
