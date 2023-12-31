<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookkeeping Services</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="style.css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Add the jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Add the Bootstrap JS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<style>

</style>
</head>

<body>
    <!-- header site -->


    <div class="banner banner-expand-md ">
        <img src="images/banner1.png" class="img-fluid" alt="Responsive image " style="width: 100%;   height: 300px">

    </div>




    <nav class="navbar navbar-expand-md bg shadow">

        <a class="navbar-brand fs-3 ms-3 " href="#">
            <i class='bx bxs-book'></i> BOOKKEEPING
        </a>


        <button class="navbar-toggler me-3 text-black" type="button" data-toggle="collapse" data-target="#btn">
          <i class="bx bx-menu bx-md"></i>
        </button>
    
<!-- Navigation-->
<?php include('includes/nav.php'); ?> 

    </nav>



    <!--start CLIENT INFORMATION Section -->
    <section>
        <div class="container mt-5 shadow">
            <div class="row justify-content-center align-content-center mb-5">
                <div class="col-md-4 bg1 p-5 text-white order-sm-first order-last">
                    <h2 class="head1">Let's get in touch</h2>
                    <p class="txt1">we're open for any suggestion or just to have a chat</p>
                    <div class="d-flex mt-3">
                        <i class="bi bi-geo-alt"></i>
                        <p class="txt1 mt-3 ms-3 ">Address :Lapu-lapu Street, Tagum City</p>
                    </div>
                    <div class="d-flex mt-3">
                        <i class="bi bi-telephone-forward"></i>
                        <p class="txt1 mt-3 ms-3">Phone : 0912-245-7890</p>
                    </div>
                    <div class="d-flex mt-3">
                        <i class="bi bi-envelope"></i>
                        <p class="txt1 mt-3 ms-3 txt1">Email :bkpservices@gmail.com</p>
                    </div>
                    <div class="d-flex mt-3">
                        <i class="bi bi-instagram"></i>
                        <p class="txt1 mt-3 ms-3 txt1">Instagram :@bkpservices </p>
                    </div>
                </div>
                <div class="col-md-8 p-5">
                    <h2> Fill-in to Register!</h2>

                    <form class="row g-5 contactforms ">
                        <div class="col-md-6">
                            <label for="inputname" class="form-label">Name</label>
                            <input type="conttact" class="form-control" id="inputname">

                            <label for="inputemail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputemail">

                            <label for="inputphoneno." class="form-label">Phone no.</label>
                            <input type="phoneno." class="form-control" id="inputphoneno.">
                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>sample1</option>
                            <option>sample2</option>
                            <option>sample</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <!--End CLIENT INFORMATION Section  -->

    <hr>
   
 <!-- Footer-->
<?php include ('includes/footer.php'); ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>