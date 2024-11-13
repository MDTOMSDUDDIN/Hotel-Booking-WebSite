<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Mangement </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!--google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins&display=swap" rel="stylesheet">
  <!--bootstrap iconn cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- swiperjs cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <!-- css link -->
    <link rel="stylesheet" href="css/style.css">
    

  <style>
        .availbility-form{
            margin-top: -35px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-wight:575px) {
           .availbility-form{
              margin-top: 20px;
              padding: 0 35px;
            } 
        }
    </style>
</head>
<body class="bg-light" >
    <nav class="navbar navbar-expand-lg nav-light bg-white px-lg-3 px-lg-2 shodow-sm sticky-top ">
        <div class="container-fluid">
            <a class="navbar-brand"  href="index.php">HOTEL</a>
            <button class="navbar-toggler shodow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent" >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link  me-2" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link  me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link  me-2" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link  me-2" href="#">Abouts</a>
                    </li>
                </ul>
            <div class="d-flex" role="search">
                <button type="button" class="btn btn-outline-dark shodow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>

                <button type="button" class="btn btn-outline-dark shodow-none " data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</button>
             </div>
            </div>
        </div>
    </nav>
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
            <form>
                <div class="modal-header d-flex align-items-center">
                    <h1 class="modal-title fs-5">
                        <i class="bi bi-person-circle fs-3 me-2 "></i>User Login
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email Address </label>
                        <input type="email" name="email" class="form-control shodow-none" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password </label>
                        <input type="password" name="password" class="form-control shodow-none" >
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-between mb-2">
                        <button type="submit"  class="btn btn-dark shadow-none">Login</button>
                        <a href="javascript: void(0)" class="text-decoration-none">Forgot Password ? </a>
                    </div>
                </div>
            </form>
          </div>
       </div>
    </div>
    <!-- Register Model  -->
    <div class="modal fade " id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog">
            <div class="modal-content">
              <form >
                <div class="modal-header d-flex align-items-center">
                    <h1 class="modal-title fs-5">
                      <i class="bi bi-r-circle-fill fs-3 me-2 "></i>User Register
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                    Note:Your Details must match with your ID(NID Card, Passpord, Driving License). That will be required during check-in.
                 </span>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" name="phone_number" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Picture</label>
                            <input type="file" name="picture" class="form-control">
                        </div>
                        <div class="col-md-12 ps-0 mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="" class="form-control shadow-none" rows="1"></textarea>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Pin Code</label>
                            <input type="number" name="pin_code" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Date Of Birth</label>
                            <input type="date" name="dateOfBirth" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control shadow-none">
                        </div>
                      </div>
                        <div class="text-center my-1">
                         <button type="submit" class="btn btn-dark shadow-none">Register</button>
                        </div>
                    </div>
                </div>
              </form>
            </div>
       </div>
    </div>
    <!-- Carousel Design->using swiper js -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/carosoul1.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/carosoul2.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/carosoul3.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/carosoul4.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/carosoul5.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/carosoul6.png" class="w-100 d-block" />
            </div>
          </div>
        </div>
    </div>
    <!-- check booking availbility form -->
    <div class="container availbility-form">
        <div class="row">
            <div class="col-lg-12  bg-white shadow p-4 rounded">
                 <h4 class="text-center mb-4">Check Booking Availability</h4>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label for="" class="form-label" style="font-weight: 900;" >Check-In</label>
                            <input type="date" class="form-control shadow-none" >
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="" class="form-label" style="font-weight: 900;" >Check-Out</label>
                            <input type="date" class="form-control shadow-none" >
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="" class="form-label" style="font-weight: 900;" >Adult Rooms</label>
                            <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>   
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label for="" class="form-label" style="font-weight: 900;" >Childen Rooms</label>
                            <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>   
                        </div>
                        <div class="col-lg-1 mb-lg-3">
                            <button type="submit" class="btn text-white shadow-none check-btn">Submit</button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>
    <br><br><br>
    <!-- Our Rooms  -->
     <div>
        <h2 class="mt-3 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
     </div>
     <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px ; margin:auto;">
                <img src="images/rooms/1.jpg" class="card-img-top" alt="images">
                <div class="card-body">
                    <h5>Simple Room Name</h5>
                    <h6 class="mb-4">₹ 4000 per Night</h6>
                    <div class="features mb-4">
                       <h6 class="mb-1">Features</h6>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Rooms
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Bathroom
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Balcony
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          3 sofa
                       </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Free Wifi
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Television
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Air Condition
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Room Heater
                       </span>
                       <div class="rating mb-4">
                        <h6 class="mb-1 mt-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                       </div>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white check-btn shadow-none ">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark bg-secondary text-white shadow-none">More Details</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px ; margin:auto;">
                <img src="images/rooms/rooms2.png" class="card-img-top" alt="images">
                <div class="card-body">
                    <h5>Simple Room Name</h5>
                    <h6 class="mb-4">₹ 6000 per Night</h6>
                    <div class="features mb-4">
                       <h6 class="mb-1">Features</h6>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Rooms
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Bathroom
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Balcony
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          3 sofa
                       </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Free Wifi
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Television
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Air Condition
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Room Heater
                       </span>
                       <div class="rating mb-4">
                        <h6 class="mb-1 mt-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                       </div>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white check-btn shadow-none ">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark bg-secondary text-white shadow-none">More Details</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px ; margin:auto;">
                <img src="images/rooms/room3.png" class="card-img-top" alt="images">
                <div class="card-body">
                    <h5>Simple Room Name</h5>
                    <h6 class="mb-4">₹ 5000 per Night</h6>
                    <div class="features mb-4">
                       <h6 class="mb-1">Features</h6>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Rooms
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Bathroom
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Balcony
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          3 sofa
                       </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Free Wifi
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Television
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Air Condition
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Room Heater
                       </span>
                       <div class="rating mb-4">
                        <h6 class=" mb-1 mt-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                       </div>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white check-btn shadow-none ">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark bg-secondary text-white shadow-none">More Details</a>
                    </div>
                </div>
                </div>
            </div>







            
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
     </div>

  <!-- Our Rooms  -->
    <div>
      <h2 class="mt-3 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITICS</h2>
    </div>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow my-3 my-3">
                <img src="images/features/wifi.svg" alt="images" width="80px">
                <h4 class="mt-3">Wifi</h4>
            </div>
            <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow my-3 my-3">
                <img src="images/features/Air_Condition.svg" alt="images" width="80px">
                <h4 class="mt-3">Air Condition</h4>
            </div>
            <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow my-3 my-3">
                <img src="images/features/electricity.svg" alt="images" width="80px">
                <h4 class="mt-3">Electricity</h4>
            </div>
            <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow my-3 my-3">
                <img src="images/features/television.svg" alt="images" width="80px">
                <h4 class="mt-3">Television</h4>
            </div>
            <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow my-3 my-3">
                <img src="images/features/unlimit_serverce.svg" alt="images" width="80px">
                <h4 class="mt-3">Unlimit Services</h4>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>    
    </div>

  <!-- testimonial section -->
   <div class="container">
    <div class="row">

    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

     <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay: {
        delay:1500,
        disableOnInteraction:false,
      },
    });
  </script>
</body>
</html>