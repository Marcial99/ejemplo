<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/ea8ca97441.js" crossorigin="anonymous"></script>
    <title>Distribuidoras</title>
    <style>
        .icono{
            font-weight:bold;
            font-size: 2rem;
        }
        .insta{
            color:mediumvioletred;
        }
        .cole{
            text-align:center;
        }
        body{
            font-size:1.8rem;
        }
        .text-left{
            font-size:1.8rem
        }
    </style>
</head>
<body>
    <div class="container-fluid mb-5 pb-5 pt-4">
    <h1 class="text-center font-weight-bold">Nuestras distribuidoras autorizadas</h1>
    <br><br>
    <h2 class="text-center">México</h2>
    <br>
    <div class="col-md-12">
    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h1 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Aguascalientes
              </button>
            </h1>
          </div>
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                @foreach ($aguascalientes as $dealer)
                <div class="card mb-12" >
                    <div class="row no-gutters">
                      <div class="col-md-4">
                          <a href="{{$dealer->link_facebook}}">
                        <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                    </a>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                          <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                          <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                          <p class="card-text">
                            @if ($dealer->link_instagram!=='')

                                <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                @endif
                           <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                           <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                           <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                        </div>
                      </div>
                    </div>
                  </div>
                <br>
                        @endforeach
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Baja California
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                @foreach ($bajaC as $dealer)
                <div class="card mb-12" >
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <a href="{{$dealer->link_facebook}}">
                            <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                        </a>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                          <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                          <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                          <p class="card-text">
                            @if ($dealer->link_instagram!=='')

                                <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                @endif
                           <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                           <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                           <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                        </div>
                      </div>
                    </div>
                  </div>
                <br>
                        @endforeach  
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Baja California Sur
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                @foreach ($bajaS as $dealer)
                <div class="card mb-12" >
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <a href="{{$dealer->link_facebook}}">
                            <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                        </a>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                          <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                          <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                          <p class="card-text">
                            @if ($dealer->link_instagram!=='')

                                <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                @endif
                           <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                           <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                           <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                        </div>
                      </div>
                    </div>
                  </div>
                <br>
                        @endforeach  
            </div>
          </div>
        </div>




        <div class="card">
            <div class="card-header" id="heading4">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                  Campeche
                </button>
              </h2>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($campeche as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-header" id="heading5">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                  CDMX
                </button>
              </h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($cdmx as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-header" id="heading6">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                  Chiapas
                </button>
              </h2>
            </div>
            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($chiapas as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>






          <div class="card">
            <div class="card-header" id="heading7">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                  Chihuahua
                </button>
              </h2>
            </div>
            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($chihuahua as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="heading8">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
                  Coahuila
                </button>
              </h2>
            </div>
            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($coahuila as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-header" id="heading9">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseThree">
                  Colima
                </button>
              </h2>
            </div>
            <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($colima as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>





          <div class="card">
            <div class="card-header" id="heading10">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseThree">
                  Durango
                </button>
              </h2>
            </div>
            <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($durango as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>




          <div class="card">
            <div class="card-header" id="heading11">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapseThree">
                  Estado de México
                </button>
              </h2>
            </div>
            <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($edomex as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-header" id="heading12">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapseThree">
                  Guanajuato
                </button>
              </h2>
            </div>
            <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($gto as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>




          <div class="card">
            <div class="card-header" id="heading13">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapseThree">
                  Guerrero
                </button>
              </h2>
            </div>
            <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($guerrero as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>




          <div class="card">
            <div class="card-header" id="heading14">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapseThree">
                  Hidalgo
                </button>
              </h2>
            </div>
            <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($hidalgo as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>




          <div class="card">
            <div class="card-header" id="heading15">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapseThree">
                  Jalisco
                </button>
              </h2>
            </div>
            <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($jalisco as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>




          <div class="card">
            <div class="card-header" id="heading16">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapseThree">
                  Michoacán
                </button>
              </h2>
            </div>
            <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($mich as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>




          <div class="card">
            <div class="card-header" id="heading33">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse33" aria-expanded="false" aria-controls="collapseThree">
                  Morelos
                </button>
              </h2>
            </div>
            <div id="collapse33" class="collapse" aria-labelledby="heading33" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($mor as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>






          <div class="card">
            <div class="card-header" id="heading17">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapseThree">
                  Nayarit
                </button>
              </h2>
            </div>
            <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($nay as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-header" id="heading18">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapseThree">
                  Nuevo León
                </button>
              </h2>
            </div>
            <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($nl as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>




          <div class="card">
            <div class="card-header" id="heading19">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapseThree">
                  Oaxaca
                </button>
              </h2>
            </div>
            <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($oax as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>




          <div class="card">
            <div class="card-header" id="heading20">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapseThree">
                  Puebla
                </button>
              </h2>
            </div>
            <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($puebla as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-header" id="heading21">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapseThree">
                  Querétaro
                </button>
              </h2>
            </div>
            <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($qro as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-header" id="heading22">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapseThree">
                  Quintana Roo
                </button>
              </h2>
            </div>
            <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($qroo as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="heading23">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapseThree">
                  San Luis Potosí
                </button>
              </h2>
            </div>
            <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($slp as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-header" id="heading24">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse24" aria-expanded="false" aria-controls="collapseThree">
                  Sinaloa
                </button>
              </h2>
            </div>
            <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($sina as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="heading25">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse25" aria-expanded="false" aria-controls="collapseThree">
                  Sonora
                </button>
              </h2>
            </div>
            <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($son as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-header" id="heading26">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse26" aria-expanded="false" aria-controls="collapseThree">
                  Tabasco
                </button>
              </h2>
            </div>
            <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($tab as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="heading27">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse27" aria-expanded="false" aria-controls="collapseThree">
                  Tamaulipas
                </button>
              </h2>
            </div>
            <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($tam as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-header" id="heading29">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse29" aria-expanded="false" aria-controls="collapseThree">
                  Veracruz
                </button>
              </h2>
            </div>
            <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($ver as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-header" id="heading30">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse30" aria-expanded="false" aria-controls="collapseThree">
                  Zacatecas
                </button>
              </h2>
            </div>
            <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($zac as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-header" id="heading31">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse31" aria-expanded="false" aria-controls="collapseThree">
                  Otros
                </button>
              </h2>
            </div>
            <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#accordionExample">
              <div class="card-body">
                  @foreach ($otr as $dealer)
                  <div class="card mb-12" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="{{$dealer->link_facebook}}">
                                <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                              <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                              <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                              <p class="card-text">
                                @if ($dealer->link_instagram!=='')
    
                                    <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                    @endif
                               <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                               <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                               <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                          @endforeach  
              </div>
            </div>
          </div>
      </div>
    </div>
    <br><br>
      <h2 class="text-center">Estados Unidos</h2>
      <div class='col-md-12'>
      <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="heading32">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse32" aria-expanded="false" aria-controls="collapseThree">
              Texas
            </button>
          </h2>
        </div>
        <div id="collapse32" class="collapse" aria-labelledby="heading32" data-parent="#accordionExample">
          <div class="card-body">
              @foreach ($tex as $dealer)
              <div class="card mb-12" >
                  <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="{{$dealer->link_facebook}}">
                            <img src="{{$dealer->imagen}}" class="card-img" alt="...">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class='card-title'>{{$dealer->facebook}}</h1> <br>
                          <p class="card-text"><strong>Contacto:</strong>{{$dealer->nombre}}</p>
                          <p class="card-text"><strong>Facebook:</strong> <a href="{{$dealer->link_facebook}}"><i class="fab fa-facebook icono"></i>  {{$dealer->facebook}}</a></p>
                          <p class="card-text">
                            @if ($dealer->link_instagram!=='')

                                <strong>Instagram: </strong><a href="{{$dealer->link_instagram}}"> <i class="fab fa-instagram icono insta"></i> <span class="insta">{{$dealer->instagram}} </span></a> <br>
                                @endif
                           <strong>Telefono:</strong> {{$dealer->telefono}} <br> <br>
                           <strong>Ciudad:</strong> {{$dealer->ciudad}} <br><br>
                           <strong>Estado:</strong> {{$dealer->estado}} <br><br>
                        </div>
                    </div>
                  </div>
                </div>
              <br>
                      @endforeach  
          </div>
        </div>
      </div>
</div>
</div>
</div>
    
</body>
</html>