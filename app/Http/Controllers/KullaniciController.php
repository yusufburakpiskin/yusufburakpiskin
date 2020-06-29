<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\User;
class KullaniciController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function kayit()
    {
        $user = new User;
        $user->adi = request('adi');
        $user->email =request('email');
        $user->password =bcrypt(request('password'));
        $table->string('remember_token')->nullable();
        $user->yetki = "2";
      
        $user->save();

        // auth()->login($user);
        return redirect()->intended(route('home'));
          
    }

    public function login()
    {
        return view('login');
    }


    public function girisYap(Request $request)
    {
        $aa = $request->only('email', 'password');

        
        if (Auth::attempt($aa, request()->input('remember'))) {
            $user = auth()->user();
            
            if (request()->input('remember') !== null) {
                Cookie::queue('email', $user->email, 120);
                Cookie::queue('password', request('password'), 120);
                
            } else {
                Cookie::queue( Cookie::forget('email'));
                Cookie::queue( Cookie::forget('password'));
            }
           
            if ($user->yetki=='1') {
                return redirect()->intended(route('home'));
            }  
            else if ($user->yetki=='2' || $user->hasRole('üye')) {                
                return redirect()->intended(route('home'));
            }
            else { 
                auth()->logout();          
            }      
                                
        }
        else {
            return redirect()->intended(route('login.show'));
        }

    }

    public function logout()
    {
        auth()->logout();
        
        return redirect()->to('/giris');
    }

    
}
