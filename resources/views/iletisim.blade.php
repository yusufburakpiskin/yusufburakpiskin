@extends('template')

@section('icerik')
<div class="kutt">
    <form id="id" action="https://formspree.io/yusufburakpiskin@gmail.com" method="post">
        <h2>İletişim Sayfası</h2>
        <div class="form-kontrol">
            <input placeholder="Adınız Soyadınız" type="text" required autofocus>
        </div>
        <div class="form-kontrol">
            <input placeholder="Doğum Tarihi" type="date" required>
        </div>
        <div class="form-kontrol">
            <input placeholder="Telefon Numaranız" type="tel" required>
        </div>
        <div class="form-kontrol">
            <input placeholder="E-Posta Adresiniz" type="email" required>
        </div>

        <div class="form-kontrol">
            <textarea placeholder="Lütfen Mesajınızı Buraya Yazın.." required></textarea>
        </div>
        <div class="form-kontrol">
            <button name="submit" type="submit" id="submit">GÖNDER</button>
        </div>
    </form>
</div>
    
    
     <p class="totop"> 
  <a id="top">
    <img src="https://icons.iconarchive.com/icons/saki/nuoveXT/48/Actions-arrow-up-icon.png">
  </a> 
</p>
    
@endsection