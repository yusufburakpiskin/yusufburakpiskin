<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Panel</title>

<link href="{{asset('back')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="{{asset('back')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 
      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          
          <span>PANEL</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        
          <span>Makaleler</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="py-2 ">
          
            <a class="collapse-item" href="{{route('makale')}}" style="color: aliceblue">Tüm Makaleler </a></div>
            <div  class="py-2 ">
            <a class="collapse-item" href="{{route('makale-olustur')}}" style="color: aliceblue">Makale Oluştur</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('kullanici')}}">
        
          <span>Kullanicilar</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
          
          <span>Siteyi Görüntele</span></a>
      </li>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <div class="container-fluid">

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               
                    <tr>
                      <th>İD</th>
                      <th>Başlık</th>
                      <th>Yazı</th>     
                      <th>Oluşturma Tatihi</th>
                      <th>Güncelleme Tatihi</th>
                      <th>Düzenle</th>
                    </tr>
                    @foreach ($duyurular as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->baslik}}</td>
                      <td>{{$item->yazi}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->updated_at}}</td>
                      <td><a href="{{route('makale-sil', $item->id)}}"><button class="btn btn-primary">Sil</button></a></td>
                    </tr>
                    @endforeach
                  
                </table>
              </div>
            </div>
          </div>

  </div>
  
  <script src="{{asset('back')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('back')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="{{asset('back')}}/vendor/jquery-easing/jquery.easing.min.js"></script>


  <script src="{{asset('back')}}/js/sb-admin-2.min.js"></script>

  <script src="{{asset('back')}}/vendor/chart.js/Chart.min.js"></script>

  <script src="{{asset('back')}}/js/demo/chart-area-demo.js"></script>
  <script src="{{asset('back')}}/js/demo/chart-pie-demo.js"></script>

</body>

</html>
