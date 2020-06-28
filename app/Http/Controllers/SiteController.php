<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\duyuru;
use App\User;
class SiteController extends Controller
{
public function home()
    {
        $duyurular=duyuru::all();
     
        return view('home',compact('duyurular'));
    }
    public function hakkimda()
    {
  
        return view('hakkimda');
    }
    public function iletisim()
    {
        return view('iletisim');
    }
    public function panel()
    {
        $kullanicilar=User::all();
        return view('adminpanel',compact('kullanicilar'));
    }

    public function yetkiguncelle($id)
    {
        $user=User::find($id);
        $user->yetki=request()->input('yetki');
        $user->save();

        $user=User::all();
        return view('dashboardKullanici',compact('user'));
    
    }
    public function index(){

        return view('dashboard');
    }
    public function yetkisil($id){
        $user=User::find($id);
    
        $user->delete($id);
       
        $user=User::all();
        return view('dashboardKullanici',compact('user'));
    }
    public function makalesil($id){
        $user=duyuru::find($id);
    
        $user->delete($id);
       
        $duyurular=duyuru::all();
        return view('dashboardMakale',compact('duyurular'));
    }
    public function Makale(){
        $duyurular=duyuru::all();
        return view('dashboardMakale',compact('duyurular'));
    }
    public function creat(){

        return view('dashboardMakaleOlustur');
    }
    public function kayit()
    {
        $user = new duyuru;
        $user->baslik = request('title');
        $user->yazi =request('content');
      
        $user->save();

        
        $duyurular=duyuru::all();
        return view('dashboardMakale',compact('duyurular'));
          
    }
    public function kullanici(){
        $user=User::all();
        return view('dashboardKullanici',compact('user'));
    }

}
