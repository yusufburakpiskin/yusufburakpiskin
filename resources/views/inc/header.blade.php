
<body>
	<div class="wrapper">
		<!-- HEADER yorum -->
		<header>
			<div class="container">
				<!-- Logo -->
				<div class="logo">
					<span>YBP</span>
				</div>
				<!-- Menu -->
				<nav>
					<ul>
                    <li><a href="{{ route('home') }}">ANASAYFA</a></li>
						<li><a href="#">Sayfa 2</a>
                        	<ul>
            				<li><a href="video.html">Video</a></li>
            				<li><a href="#">Sayfa</a></li>
            				<li><a href="#">Sayfa</a></li>
            				</ul>
                        </li>
						<li><a href="#">Sayfa 3</a></li>
                        <li><a href="{{ route('hakkimda') }}">HAKKIMIZDA</a></li>
						<li><a href="{{ route('iletisim') }}">İletişim</a></li>
						<li><a href="#" onclick="event.preventDefault(); document.getElementById('admin-formu').submit();">
							<?php  
							if(Auth::check()){
								
							 if(auth()->user()->yetki == '1')
							 echo  ("Admin Paneli");
							 else{
								
							 } } ?>
							 
	   
					</a></li>
					<form id="admin-formu" action="{{route('admin.dashboard') }}" method="POST" style="display: none;"> 
						{{ csrf_field() }}
					</form>
						<li><a href="#" onclick="event.preventDefault(); document.getElementById('cikis-formu').submit();">
							<?php  
							if(Auth::check()){
								echo  ("Çıkış Yap");
							   }
							   else{
								 echo ("Giriş Yap");
							   } ?>
	   
					</a></li>
					<form id="cikis-formu" action="{{ route('logout') }}" method="POST" style="display: none;"> 
						{{ csrf_field() }}
					</form>
					</ul>
					<div class="menu-bar">MENU</div>
                    
					<div class="clear"></div>
				</nav>
			</div>
		</header>