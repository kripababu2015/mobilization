<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <title>Mobilization</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            height: 100vh;
            font-family: "Nunito Sans";
        }

        .form-control {
            line-height: 2;
        }

        .bg-custom {
            background-color: #6C63FF;
        }

        .btn-custom {
            background-color: #3e3d56;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #33313f;
            color: #fff;
        }

        label {
            color: #fff;
        }

        a,
        a:hover {
            color: #fff;
            text-decoration: none;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        @media(max-width: 932px) {
            .display-none {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div class="row m-0 h-100">
        <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
            <img src="../img/login.svg" class="w-100">
        </div>
        <div class="col p-0 bg-custom d-flex justify-content-center align-items-center flex-column w-100">
            <form class="w-75" action="<?php echo base_url()?>main/logincheck" method="post">
                <div class="mb-3">
                    <label for="Input1" class="form-label">Username</label>
                    <input type="text" name="name"class="form-control" id="exampleFormControlInput1" placeholder="username"
                        required   pattern="[a-zA-Z]+">
                </div>
                <div class="mb-3">
                    <label for="Input2" class="form-label">Password</label>
                    <input type="password" name="password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control" id="exampleFormControlInput2" placeholder="password"
                        >
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                            <label class="form-check-label" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" value="Login Now" class="btn btn-custom btn-lg btn-block mt-3">
            </form>
        </div>
    </div>
    <script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>