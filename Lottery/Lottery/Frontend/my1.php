<?php include('profile.php'); ?>
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

    <!-- // credit ......................... -->
    <div class="container-fluid my-2">

        <div class="text-center">
            <p>Name: <?php echo $name; ?></p>
            <p>Mobile Number: <?php echo $mobileNo; ?></p>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="text-center shadow border border-3">
                    <p></p>
                    <p>Lottery Number : <?php echo $lotteryNo; ?></p>
                    <p></p>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center shadow border border-3">
                    <p></p>
                    <p>Date : <?php echo $registrationDate; ?></p>
                    <p></p>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center shadow border border-3">
                    <p></p>
                    <p>Winning Amount :</p>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-6">
                <div class="text-center shadow border border-3">
                    <p></p>
                    <p>Available Balance : </p> <br>
                    <p></p>
                </div>
            </div>
            <div class="col-6">
                <div class="text-center shadow border border-3">
                    <p></p>
                    <a href="recharge.html"> <button type="button"
                            class="btn btn-success btn-block mb-5">Recharge</button></a>
                
                    <a href="withdraw.html"> <button type="button"
                            class="btn btn-success btn-block mb-5">Withdraw</button></a>

                </div>

            </div>
        </div>

        <div>
            <div class="list-group my-3">
                <a href="transaction.html"><button type="button" class="list-group-item list-group-item-action my-2">
                    <i class="fa fa-exchange" aria-hidden="true"></i> Transaction
                    </button></a>
                <a href="bankdetails.html"><button type="button" class="list-group-item list-group-item-action my-2">
                    <i class="fa-solid fa-building-columns"></i>Bank Details
                    </button></a>
                <a href="resetpassword.html"><button type="button" class="list-group-item list-group-item-action my-2">
                    <i class="fa-solid fa-key"></i> Password
                    </button></a>
                <a href="about.html"><button type="button" class="list-group-item list-group-item-action my-2">
                    <i class="fa-regular fa-address-card"></i> About
                    </button></a>
            </div>
        </div>


        <div class="text-center mb-5">
            <a href="logout.php">
                <button type="button" class="btn btn-primary btn-block mb-5">Log Out</button>
            </a>
        </div>



    </div>
    <!-- //-------------------footer--------------------------- -->
    <div class="container-fluid py-2 mt-5 mt-2 fixed-bottom bg-light">
        <div class="row ">
            <div class="col text-center">
                <a href="index1.html"> <i class="fa-solid fa-house "><br /></i> <br>Home</a>
            </div>
            <div class="col  text-center ">
                <a href="credit1.html"> <i class="fa-solid fa-credit-card "></i> <br>Credit</a>
            </div>
            <div class="col  text-center ">
                <a href="tax1.html"> <i class="fa-solid fa-bolt "></i> <br>Tax charges</a>
            </div>
            <div class="col  text-center ">
                <a href="result.html"> <i class="fa-solid fa-list-alt "></i> <br>Result</a>
            </div>

            <div class="col text-center">
                <a href="my1.php"> <i class="fa-regular fa-address-book "></i> <br>My</a>

            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>