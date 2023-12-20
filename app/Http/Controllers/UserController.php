<?php
namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            $user = Auth::user();

            switch ($user->role) {
                case 'evaluator':
                    return redirect('/evalchoice');
                case 'admin':
                    return redirect('/admindash');
                case 'fyp_group':
                default:
                    return redirect('/studentdash');
            }
        }

        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','You have been logged out.');

    }

}
