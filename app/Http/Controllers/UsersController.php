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
        $request->validate([
            'username' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|confirmed',

        ]);
        Users::create([
            'user_name' => $request->username,
            'user_email' => $request->email,
            'user_password' => Hash::make($request->password),
            'user_description' => $request->description
        ]);
        return redirect(route('login'))->with('status','Silahkan login dengan akun yang didaftarkan');
    }

    public function login_users(Request $request)
    {
        // $task = Users::where('user_email', $request->email) -> where('user_password', $request->password) -> count();
        // if($task == 1){
        //     $session_data = Users::where('user_email', $request->email) -> where('user_password', $request->password) -> first();
        //     return view('dashboards.dashboard', compact('session_data'));
        // }
        // return redirect()->route('login');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);

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
            Session::flash('error', 'Akun anda tidak ditemukan silahkan registrasi');
            return redirect('register');
        }

    }
    public function configusername(Request $request,$id){
        $request->validate([
            'username' => 'required'
        ]);
        Users::where('user_id',$id)->update([
            'user_name' => $request->username
        ]);
        $request->session()->put([
            'name' => $request->username
        ]);
        return redirect()->back()->with('status','Username berhasil diupdate');
    }
    public function configemail(Request $request,$id){
        $request->validate([
            'email' => 'required'
        ]);
        Users::where('user_id',$id)->update([
            'user_email' => $request->email
        ]);
        $request->session()->put([
            'email' => $request->email
        ]);
        return redirect()->back()->with('status','Email berhasil diupdate');
    }
    public function configpassword(Request $request,$id){
        $request->validate([
            'password' => 'required|confirmed'
        ]);

        Users::where('user_id',$id)->update([
            'user_password' => Hash::make($request->password)
        ]);
        return redirect()->back()->with('status','Password berhasil diupdate');
    }
    public function configdesc(Request $request, $id){
        $request->validate([
            'desc' => 'required'
        ]);
        Users::where('user_id',$id)->update([
            'user_description' => $request->desc
        ]);
        $request->session()->put([
            'desc' => $request->desc
        ]);
        return redirect()->back()->with('status','Deskripsi berhasil diupdate');
    }
    public function logout($id){
        Session::flush();
        return redirect('/login');
    }
    public function createListOwnProfile(Request $request,$userId){
        $userData=Users::where('user_id',$userId)->get();
        // dd($userData);
        $discussList=Discuss::where('discuss_user_id',$userId)->orderBy('updated_at', 'DESC')->paginate(10);
        $discussCount=Discuss::where('discuss_user_id',$userId)->count();
        
        return view('dashboards.userprofile',compact('userData','discussList','discussCount'));
    }

    public function config($id){
        if($id == Session::get('id')){
            return view('dashboards.configuser');
        }
        return redirect()->back();
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
