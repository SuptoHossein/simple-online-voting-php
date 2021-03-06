<?php 
session_start();
if (isset($_SESSION['userdata'])) {
    header('Location: dashboard.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/" />

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json" />
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3" />
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico" />
    <meta name="theme-color" content="#7952b3" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet" />
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="../api/register.php" method="post" enctype="multipart/form-data">
            <h1 class="h3 mb-3 fw-normal">Registration</h1>

            <div class="form-floating">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Enter name" />
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="number" name="mobile" class="form-control" id="floatingInput" placeholder="Mobile" />
                <label for="floatingInput">Mobile</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" />
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" name="cpassword" class="form-control" id="floatingPassword" placeholder="Confirm Password" />
                <label for="floatingPassword">Confirm Password</label>
            </div>
            <div class="form-floating">
                <input type="text" name="address" class="form-control" id="floatingPassword" placeholder="Enter address" />
                <label for="address">Address</label>
            </div>
            <div class="form-group">
                <label for="photo" style="float:left;margin-top:5px">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="role" style="float: left;margin-top:5px">Role</label>
                <select name="role" id="" class="form-control">
                    <option value="" style="display: none;">Select</option>
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select>
            </div>

            <button class="w-100 mb-2 btn btn-lg btn-primary" type="submit">
                Sign in
            </button>
            <p>Already user? <a class="mt-3" href="../index.php">Sign in</a></p>
        </form>
    </main>
</body>

</html>