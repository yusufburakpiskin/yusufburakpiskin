<!doctype html>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>
</head>
<body>
<table>
  <tr>
    <th><b>Kullanıcı Adı</b></th>
    <th><b>Yetkisi</b></th>
    <th><b>Güncelle</b></th>
    <th><b>Sil</b></th>
    @foreach ($kullanicilar as $user)
    
    <tr>
        <td>
            {{$user->email}}
        </td>
        <td>
        <?php 
        switch ($user->yetki) {
            case 1:
                echo "Admin";
                break;
            case 2:
                echo "Kullanıcı";
                break;
            case 3:
                echo "Misafir";
                break;
            }
        ?>
        </td>
        <td>
        <a href="{{route('yetki-guncelle', $user->id)}}"><button>Güncelle</button></a>
        </td>
        <td>
            <a href="{{route('yetki-guncelle', $user->id)}}"><button>Sil</button></a>
            </td>
    </tr>
    @endforeach
</table>




</body>
</html>





