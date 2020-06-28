@extends('template')

@section('icerik')
<script>
    function olustur(){
    var pdf = new jsPDF('p', 'pt', 'letter');
    source = $('#HTMLtoPDF')[0];
    specialElementHandlers = {
        '#bypassme': function(element, renderer){
            return true
        }
    }
    margins = {
        top: 50,
        left: 60,
        width: 545
      };
    pdf.fromHTML(
          source // HTML string or DOM elem ref.
          , margins.left // x coord
          , margins.top // y coord
          , {
              'width': margins.width // max width of content on PDF
              , 'elementHandlers': specialElementHandlers
          },
          function (dispose) {
            // dispose: object with X, Y of the last line add to the PDF
            //          this allow the insertion of new lines after html
            pdf.save('cv.pdf');
          }
      )		
    }
    var isEditable = document.getElementById("HTMLtoPDF").isContentEditable
    
    function Edit() {
        isEditable = !isEditable
        document.getElementById("HTMLtoPDF").contentEditable = isEditable
        if (isEditable) {
            document.getElementById("duzenle").innerHTML = "Onayla"
        } else {
            document.getElementById("duzenle").innerHTML = "Düzenle"
        }
    }
        </script>
    
    <form id="about" >
    <div class="about" style="width:100%;  background:#FFF" >
                <div align="center" id="HTMLtoPDF" contenteditable="false">
    
                    <h2 style="background:#999; width:500px">Kisisel Bilgiler</h2>
                    <div style=" width:500px" class="col">
                        <div class="aboutLeft">
                            <h3 style="background:#999";>Ad Soyad</h3>
                        </div>
                        <div style="background:#FFF" class="aboutRight">
                            <p>Yusuf Burak Pişkin</p>
                        </div>
                    </div>
                    <div   class="col">
                        <div class="aboutLeft">
                            <h3 style="width:500px;background:#999">Telefon
                            </h3>
                        </div>
                        <div class="aboutRight">
                            <p>0535 345 6423</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="aboutLeft">
                            <h3 style=" width:500px;background:#999">Mail</h3>
                        </div>
                        <div class="aboutRight">
                            <p>yusufburakpiskin@gmail.com</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="aboutLeft">
                            <h3 style="width:500px;background:#999">Adres</h3>
                        </div>
                        <div style="width:500px"  class="aboutRight">
                            <p>darıca/Kocaeli</p>
                        </div>
                    </div>
                    
                    <h2 style="width:500px;background:#999">Hakkimda</h2>
                    <div style="width:500px" class="col">
                        <p>1998 Tokat dogumluyum.ilkokul,ortaokul ve liseyi darıca okudum</p>
                    </div>
                    <h2 style="width:500px ;background:#999">Egitim</h2>
                    <div class="col">
                        <div class="aboutLeft">
                            <h3>Lise</h3>
                        </div>
                        <div style="width:500px" class="aboutRight">
                            <p>Otocenter MTAL - Bilisim Teknolojileri- </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="aboutLeft">
                            <h3>Universite</h3>
                        </div>
                        <div style="width:500px"  class="aboutRight">
                            <p>Kocaeli Universitei - Bilisim Sistemleri Mühendisligi</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div align="center">
    <input type="button" id="duzenle" value="Düzenle" onClick="Edit()"/>
    <input type="button" value="İndir" onClick="olustur()"/>
    </form>
    </div>
              
@endsection