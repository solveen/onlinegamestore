@extends('layouts.master')

@section('content')
 <style>
     .carousel-inner img {
         width: 100%;
         height: 185px;
         margin-top:25px;
         margin-left:10px;
     }
     .carousel-caption {
         color:black;
     }


 </style>
 <a href="/games">
 <div class="row" style="margin-top:30px">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner mainslider">
             <div class="carousel-item active">
                 <img class="d-block  justify-content-center  rounded" src="images/s1.jpg" alt="First slide">
             </div>
             <div class="carousel-item">
                 <img class="d-block justify-content-center rounded"  src="images/s2.jpg" alt="Second slide">
             </div>
             <div class="carousel-item">
                 <img class="d-block justify-content-center rounded"  src="images/s3.jpg" alt="Third slide">
             </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>
 </div>
 </a>
 <div class = "container-fluid mt-5  mb-lg-5">
    <div class="row" style="margin-top:70px">
        <div class="col-sm-12" >
            <h1 class="text-center">Featured games</h1>
            <div class="card-deck" style="margin-top:30px" >
                <div class="card" >

                    <div class="card-body">
                        <h5 class="card-title">HALO</h5>
                        <img class="card-img-top" src="../images/cate/cat1.jpg" alt="Card image cap">
                        <p class="card-text">Halo is a military science fiction first-person shooter video game franchise created by Bungie.</p>

                    </div>

                    <div class="card-footer">
                        <a class="btn btn-primary " href="/games" role="button">See More</a>
                    </div>
                </div>

                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Dota 2</h5>
                        <img class="card-img-top" src="../images/cate/cat2.jpg" alt="Card image cap">
                        <p class="card-text">Dota 2 is a free-to-play multiplayer online battle arena video game developed and published by Valve Corporation. </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary " href="/games" role="button">See More</a>
                    </div>
                </div>
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Witcher 3</h5>
                        <img class="card-img-top" src="../images/cate/cat3.jpg" alt="Card image cap">
                        <p class="card-text">The Witcher 3: Wild Hunt is a 2015 action role-playing video game developed and published by CD Projekt.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary " href="/games" role="button">See More</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
 </div>

 <div class = "container-fluid mt-5  mb-lg-5">
     <div class="row" style="margin-top:50px">
         <div class="col-md-12">
             <h1 class="text-center">Shooting games</h1>
             <div id="demo" class="carousel slide"  data-ride="carousel">
                 <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>

                 </ul>

                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <a href="/shooting">
                         <div class="row">
                             <div class="col-md-3">
                                 <img src="../images/cate/ngames/s1.jpg" alt="games" >
                                 <div class="carousel-caption">

                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <img src="../images/cate/ngames/s2.jpg" alt="games" >
                                 <div class="carousel-caption">


                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <img src="../images/cate/ngames/s3.jpg" alt="games" >
                                 <div class="carousel-caption">


                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <img src="../images/cate/ngames/s4.jpg" alt="games" >
                                 <div class="carousel-caption">


                                 </div>
                             </div>
                         </div>
                         </a>
                     </div>
                     <div class="carousel-item">
                         <a href="/shooting">
                         <div class="row">
                             <div class="col-md-3">
                                 <img src="../images/cate/ngames/s5.jpg" alt="games" >
                                 <div class="carousel-caption">


                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <img src="../images/cate/ngames/s6.jpg" alt="games" >
                                 <div class="carousel-caption">


                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <img src="../images/cate/ngames/s7.jpg" alt="games" >
                                 <div class="carousel-caption">


                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <img src="../images/cate/ngames/s8.jpg" alt="games" >
                                 <div class="carousel-caption">

                                 </div>
                             </div>
                         </div>
                         </a>
                     </div>


                 </div>
                 <a class="carousel-control-prev" href="#demo" data-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </a>
                 <a class="carousel-control-next" href="#demo" data-slide="next">
                     <span class="carousel-control-next-icon"></span>
                 </a>
             </div>

         </div>
     </div>
 </div>

 <div class = "container-fluid mt-5  mb-lg-5">
     <div class="row" style="margin-top:50px">
         <div class="col-md-12">
             <h1 class="text-center">RPG games</h1>
             <div id="dem" class="carousel slide"  data-ride="carousel">
                 <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>

                 </ul>

                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <a href="/rpg">
                             <div class="row">
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/rp1.jpg" alt="games" >
                                     <div class="carousel-caption">

                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/rp2.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/rp3.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/rp4.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                             </div>
                         </a>
                     </div>
                     <div class="carousel-item">
                         <a href="/rpg">
                             <div class="row">
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/rp5.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/rp6.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/rp7.png" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/rp8.jpg" alt="games" >
                                     <div class="carousel-caption">

                                     </div>
                                 </div>
                             </div>
                         </a>
                     </div>


                 </div>
                 <a class="carousel-control-prev" href="#dem" data-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </a>
                 <a class="carousel-control-next" href="#dem" data-slide="next">
                     <span class="carousel-control-next-icon"></span>
                 </a>
             </div>

         </div>
     </div>
 </div>

 <div class = "container-fluid mt-5  mb-lg-5">
     <div class="row" style="margin-top:50px">
         <div class="col-md-12">
             <h1 class="text-center">Racing games</h1>
             <div id="de" class="carousel slide"  data-ride="carousel">
                 <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>

                 </ul>

                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <a href="/racing">
                             <div class="row">
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/r1.jpg" alt="games" >
                                     <div class="carousel-caption">

                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/r2.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/r3.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/r4.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                             </div>
                         </a>
                     </div>
                     <div class="carousel-item">
                         <a href="/racing">
                             <div class="row">
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/r5.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/r6.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/r7.jpg" alt="games" >
                                     <div class="carousel-caption">


                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <img src="../images/cate/ngames/r8.jpg" alt="games" >
                                     <div class="carousel-caption">

                                     </div>
                                 </div>
                             </div>
                         </a>
                     </div>


                 </div>
                 <a class="carousel-control-prev" href="#de" data-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </a>
                 <a class="carousel-control-next" href="#de" data-slide="next">
                     <span class="carousel-control-next-icon"></span>
                 </a>
             </div>

         </div>
     </div>
 </div>

    @endsection


