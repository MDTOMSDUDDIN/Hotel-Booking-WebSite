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

  <style>
        *{
            font-family:sans-serif;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
        .check-btn{
            background-color: black;
        }
        .check-btn:hover{
            background-color: green;
        }
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