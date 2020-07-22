<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Discuss;
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
        // $request->validate([
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);
        Users::create([
            'user_name' => $request->username,
            'user_email' => $request->email,
            'user_password' => Hash::make($request->password),
            'user_description' => $request->description
        ]);
        return redirect(route('login'));
    }

    public function login_users(Request $request)
    {
        // $task = Users::where('user_email', $request->email) -> where('user_password', $request->password) -> count();
        // if($task == 1){
        //     $session_data = Users::where('user_email', $request->email) -> where('user_password', $request->password) -> first();
        //     return view('dashboards.dashboard', compact('session_data'));
        // }
        // return redirect()->route('login');

        $task=Users::where('user_email', $request->email)->first();
        if($task){
            if(Hash::check($request->input('password'),$task->user_password)){
                $request->session()->put([
                    'login' => true,
                    'id' => $task->user_id,
                    'name' => $task->user_name,
                    'email' => $task->user_email,
                    'desc' => $task->user_description,
                    'joined' => $task->created_at,
                ]);
                Session::flash('success', 'Anda berhasil Login');
                return redirect('dashboard');
            }else{
                Session::flash('error', 'Password tidak cocok');
                return redirect('login');
            }
        }else{
            Session::flash('error', 'Akun anda tidak ditemukan');
            return redirect('register');
        }

    }
    public function logout($id){
        Session::flush();
        return redirect('/');
    }
    public function createListOwnProfile(Request $request,$userId){
        $userData=Users::where('user_id',$userId)->get();
        // dd($userData);
        $discussList=$userData->first()->discuss;
        // dd($discussList);
        // $discussList=Discuss::where('discuss_user_id', $userId)->get();
        $discussCount=$discussList->count();
        // dd($discussCount);
        return view('dashboards.userprofile',compact('userData','discussList','discussCount'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
