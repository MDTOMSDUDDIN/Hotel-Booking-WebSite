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
    <style>
        *{
            font-family:sans-serif;
        }
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg nav-light bg-white px-lg-3 px-lg-2 shodow-sm sticky-top ">
        <div class="container-fluid">
            <a class="navbar-brand"  href="index.php">HOTEL</a>
            <button class="navbar-toggler shodow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                <button type="button" class="btn btn-outline-dark shodow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
             </div>
            </div>
        </div>
        </nav>




     <!-- Login Modal -->
            <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form >
                <div class="modal-header d-flex align-items-center">
                    <h1 class="modal-title fs-5">
                        <i class="bi bi-person-circle fs-3 me-2 "></i>User Login
                    </h1>
                    <button type="reset" class="btn-close shodow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email Address </label>
                        <input type="text" name="email" class="form-control shodow-none" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
                </form>
                </div>
            </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>