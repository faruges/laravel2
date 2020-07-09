@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')



<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="http://caci.ochentayocho.net/public/frontend/imagenes/banner1.jpg" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="item">
        <img src="http://caci.ochentayocho.net/public/frontend/imagenes/banner2.jpg" alt="Chicago" style="width:100%;">
      </div>    
      <div class="item">
        <img src="http://caci.ochentayocho.net/public/frontend/imagenes/banner3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>


@endsection

 