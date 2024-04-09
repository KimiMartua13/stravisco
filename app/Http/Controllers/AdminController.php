<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PhotoGroup;
use App\Models\MasterClass;
use App\Models\MasterStudent;

class AdminController extends Controller
{
    public function index( Request $request )
    {
        // dd(Auth::user());
        $group = PhotoGroup::count();
        $student = MasterStudent::count();

        $dataPhoto = $group + $student;

        return view('admin/home/index', [
            'title' => 'Dashboard',
            'dataFoto' => $dataPhoto,
        ]);
    }

    public function aksiTampilFoto( Request $request ) 
    {

    }

    public function aksiTampilLogin( Request $request ) 
    {
        return view('admin/login/index');
    }

    public function aksiLoginAplikasi( Request $request ) 
    {
        $validatedData = $request->validate([
            'username' => 'required|min:8',
            'password' => 'required',
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }

        return back()->withErrors('msg',$validatedData);
    }

    public function aksiRegisterUser( Request $request ) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'password' => bcrypt( $validatedData['password'] ),
        ]);

        return redirect('/login');

    }

    public function aksiTampilRegister( Request $request ) 
    {
        return view('admin/register/index');
    }
}
