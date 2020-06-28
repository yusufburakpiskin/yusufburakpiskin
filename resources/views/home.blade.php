@extends('template')

@section('icerik')
<div class="slider">
	<div class="w3-content w3-section" style="width: 80%;max-width: 800px;height: 350px;">
<img class="mySlides" src="{{asset('site')}}/img/1.jpg" style="width:100%;height: 100%">
<img class="mySlides" src="{{asset('site')}}/img/wp.jpeg" style="width:100%;height: 100%">
<img class="mySlides" src="{{asset('site')}}/img/2.jpg" style="width:100%;height: 100%">

</div>
<div class="clear"></div>
<script>
var myIndex = 0;
carousel();

function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";  
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}    
x[myIndex-1].style.display = "block";  
setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>
</div>
<div class="content">
			
			<h1 class="title">
				<div class="container" align="center">
					Duyurular
				</div>
			</h1>
			
			<div class="container">
      @foreach($duyurular as $duyuru)
			<div class="box" style="background-color:#CCC">
          <a href="post.html">
            <h2 class="post-title" >
             <b> {{$duyuru->baslik}}</b>
            </h2>
            <h3 class="post-subtitle">
             {{$duyuru->yazi}}
            </h3>
          </a>
          <p class="post-meta">
            <a href="#"></a>
            </p>
        </div>
	@endforeach
                </div>
                	<hr />
                
                <h1 class="title">
				<div class="container" align="center">
					Haberler
				</div>
			</h1>
                <div class="container">
				<div class="box">
					<div class="img"><img src="img/htc.png" alt="" /></div>
					<div class="title">ASDasde</div>
					<div class="price">AsdhdadL</div>
				</div>
				<div class="box">
					<div class="img"><img src="img/htc.png" alt="" /></div>
					<div class="title">FSDdsf</div>
					<div class="price">dZXczcaa</div>
				</div>
				
			</div>
		</div>

@endsection