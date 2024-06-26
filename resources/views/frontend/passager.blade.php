
@extends('frontend.app')
@section('main') 
<!-- Carousel Start -->
<div   class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div id="hero" class="carousel-item active">
                
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                        <h1 class="text-white  changecontent"> </h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                    </div>
                </div>
            </div>
            
          
        </div>
        
       
    </div>
  </div>
  <!-- Carousel End -->
    <div class="container-fluid booking mt-5 ">
      <div class="container pb-5">
          <div class="bg-light shadow" style="padding: 30px;">
              <div class="row align-items-center" style="min-height: 60px;">
                  <div class="col-md-10">
                      <div class="row">
                          <div class="col-md-3">
                              <div class="mb-3 mb-md-0">
                                  <select class="custom-select px-4" style="height: 47px;">
                                      <option selected="">Destination</option>
                                      <option value="1">Destination 1</option>
                                      <option value="2">Destination 1</option>
                                      <option value="3">Destination 1</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="mb-3 mb-md-0">
                                  <div class="date" id="date1" data-target-input="nearest">
                                      <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="mb-3 mb-md-0">
                                  <div class="date" id="date2" data-target-input="nearest">
                                      <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="mb-3 mb-md-0">
                                  <select class="custom-select px-4" style="height: 47px;">
                                      <option selected="">Duration</option>
                                      <option value="1">Duration 1</option>
                                      <option value="2">Duration 1</option>
                                      <option value="3">Duration 1</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-2">
                      <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <div id = 'road'>
    <div id = 'cloud1'></div>
      <div id = 'cloud2'></div>
      <div id = 'cloud3'></div>
      <div id = 'cloud4'></div>
      <div id = 'line'></div>
        <div id = 'tree'></div>   
        <div class = 'bus'>
          <div id = 'up1'></div>
          <div id = 'up2'></div>
          <div id = 'up3'></div>
          <div id = 'win1'></div>
          <div id = 'win2'></div>
          <div id = 'win3'></div>
          <div id = 'win4'></div>
          <div id = 'whell1'></div>
          <div id = 'whell2'></div>
          <div id = 'whell3'></div>
          <div id = 'whell4'></div>
          <div id = 'fuel'></div>
          <div id ='light'></div>
          <div id ='foggy'></div>
  
    </div>
  </div>
  
  <!-- About Start -->
  <div class="container-fluid" data-aos="fade-up" data-aos-duration="1100" style=" margin-top: 40px;
  margin-bottom: 40px;" >
    <div class="container"  >
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="../frontend/front/aboutas.png" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                    <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                    <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="../frontend/img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="../frontend/img/about-2.jpg" alt="">
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-1">Book Now</a>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- About End -->
   <!-- Feature Start -->
   <div class="container-fluid pb-5" data-aos="fade-up" data-aos-duration="1500" style=" margin-top: 40px;
   margin-bottom: 40px;">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-money-check-alt text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Competitive Pricing</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-award text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Best Services</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-globe text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Worldwide Coverage</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Feature End -->
  <section id="services" class="services " data-aos="fade-up" data-aos-duration="1500" style=" margin-top: 40px;
  margin-bottom: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="far fa-calendar-alt"></i></div>
            <h4><a href="">Réservation</a></h4>
            <p>Découvrir comment réserver votre billet et gérer votre réservation.</p>
          </div>
        </div>
  
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" >
          <div class="icon-box">
            <div class="icon"><i class="fa fa-bus" style="font-size:36px;"></i></div>
            <h4><a href="">Votre trajet avec nous</a></h4>
            <p>Retournez de précieuses informations sur votre route et les services à bord</p>
          </div>
        </div>
  
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" >
          <div class="icon-box">
            <div class="icon"><i class="fa fa-map-marker" style="font-size:40px"></i></div>
            <h4><a href="">Recherche de gare</a></h4>
            <p>Découvrir la plus proche gare à votre position.</p>
          </div>
        </div>
  
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" >
          <div class="icon-box">
            <div class="icon"><i class="material-icons" style="font-size:36px">live_help</i></div>
            <h4><a href="">Aide et infos utiles</a></h4>
            <p>Découvrir nitre section Aide(FAQ) et de nombreuses infos utiles.</p>
          </div>
        </div>
  
      </div>
  
    </div>
  </section>
  
  
  <!-- Sign up Start -->
  <div class="container-fluid " data-aos="fade-up" data-aos-duration="1200" style=" margin-top: 40px;
  margin-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute  h-100" src="../frontend/front/sign.png" style="object-fit: cover; border-radius: 20px;">
                </div>
            </div>
            <div class="col-lg-5 pt-5 pb-lg-5">
              <div class="card border-0">
                <div class="card-header bg-primary text-center p-4">
                    <h1 class="text-white m-0">Sign Up Now</h1>
                </div>
                <div class="card-body rounded-bottom bg-white p-5">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control p-4" placeholder="Your name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control p-4" placeholder="Your email" required="required" />
                        </div>
                        <div class="form-group">
                            <select class="custom-select px-4" style="height: 47px;">
                                <option selected>Select a destination</option>
                                <option value="1">destination 1</option>
                                <option value="2">destination 1</option>
                                <option value="3">destination 1</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3" type="submit">Sign Up Now</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>
  <!-- signup End -->

  @endsection