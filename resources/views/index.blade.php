@extends('main')

@section('title', '| Trabalho Matheus e Maxwell')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../images/qrcode.jpg">
      <div class="carousel-caption d-none d-md-block text-left">
        <h3>QR Code é Legal</h3>
        <p>Melhor TCC da história da equipe QR Security</p>
      </div>
    </div>

    <div class="item">
      <img src="../images/qrcode.jpg">
      <div class="carousel-caption d-none d-md-block text-left">
        <h3>Binho é foda</h3>
        <p>Programa pra krl, precisa mostrar os AJAX pra noix</p>
      </div>
    </div>

    <div class="item">
      <img src="../images/qrcode.jpg">
      <div class="carousel-caption d-none d-md-block text-left">
        <h3>Maromo também é!</h3>
        <p>Prefiro ficar na merda e lamber cerveja!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('scripts')
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
@endsection

  
     