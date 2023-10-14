<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lottery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="container-fluid my-2">
        <div>
            <p class="text-center w-100 shadow border border-4 fs-4">Register </p>
        </div>
        <form class="container my-2" action="register.php" method="post">

            <div class="form-outline mb-4">
              <input type="text" id="name" name="name" class="form-control" placeholder="Name" />
              <!-- <label class="form-label" for="name" >Name</label> -->
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="mnumber" name="mnumber" class="form-control" placeholder="Mobile No" />
              <!-- <label class="form-label" for="mnumber" >Mobile No</label> -->
            </div>
          
            <div class="form-outline mb-4">
              <input type="text" id="lottery" name="lottery" class="form-control" placeholder="Lottery No" />
              <!-- <label class="form-label" for="lottery">Lottery No</label> -->
            </div>
            <div class="form-outline mb-4">
              <input type="date" id="rdate" name="rdate" class="form-control" placeholder="Date"/>
              <!-- <label class="form-label" for="rdate">Date</label> -->
            </div>
            <div class="form-outline mb-2">
              <input type="password" id="rpassword" name="rpassword" class="form-control" placeholder="Create Password" />
              <!-- <label class="form-label" for="rpassword">Password</label> -->
            </div>
          
            <!-- Submit button -->
           <div class="text-center mb-5">
           
            <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
           </div>
            
           <div id="error-message" class="text-danger"></div>
              
          
           
           
          
          </form>
            
    </div>
    <!-- //-------------------footer--------------------------- -->
    <div class="container-fluid py-2 mt-5 mt-2 fixed-bottom bg-light">
        <div class="row ">
            <div class="col text-center">
                <a href="index.html"> <i class="fa-solid fa-house "><br /></i> <br>Home</a> 
            </div>
            <div class="col  text-center ">
                <a href="credit.html"> <i class="fa-solid fa-credit-card "></i> <br>Credit</a>
            </div>
            <div class="col  text-center ">
                <a href="tax.html"> <i class="fa-solid fa-bolt "></i> <br>Tax charges</a>
            </div>
           
            <div class="col text-center">
                <a href="my.html"> <i class="fa-regular fa-address-book "></i> <br>My</a>

            </div>
        </div>
    </div>

    <script>
        // Check if the PHP error message is set
        <?php if (isset($errorMessage)) : ?>
            // Display the error message
            document.getElementById('error-message').innerText = '<?php echo $errorMessage; ?>';
        <?php endif; ?>
    </script>
    <script src="script.js"></script>



</body>

</html>