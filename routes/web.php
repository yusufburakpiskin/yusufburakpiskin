<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','SiteController@home')->name('home');

Route::get('hakkimda','SiteController@hakkimda')->name('hakkimda');
Route::get('iletisim','SiteController@iletisim')->name('iletisim');

Route::get('kayit','KullaniciController@register')->name('register.show');
Route::post('kayit-et','KullaniciController@kayit')->name('kayit-et');

Route::get('giris','KullaniciController@login')->name('login.show');
Route::post('giris-yap','KullaniciController@girisYap')->name('giris-yap');

Route::post('logout','KullaniciController@logout')->name('logout');





 


 



Route::group(['middleware'=>['admin']],function() { 

    Route::get('admin/panel', 'SiteController@index')->name('admin.dashboard');
    Route::post('admin/panel', 'SiteController@index')->name('admin.dashboard'); 
    Route::get('admin/makale', 'SiteController@Makale')->name('makale'); 
Route::get('admin/makaleOlustur', 'SiteController@creat')->name('makale-olustur'); 
Route::get('admin/makaleOlusturdu', 'SiteController@kayit')->name('makale-olusturdu'); 
Route::get('/yetkiguncelle/{id}', 'SiteController@yetkiguncelle')->name('yetki-guncelle'); 
Route::get('/yetkisil/{id}', 'SiteController@yetkisil')->name('yetki-sil'); 
Route::get('/makalesil/{id}', 'SiteController@makalesil')->name('makale-sil'); 
Route::get('kullanicilar', 'SiteController@kullanici')->name('kullanici'); 

});
