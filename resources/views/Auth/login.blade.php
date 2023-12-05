<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('netflix.css')}}">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="loginBG">
<br><br><br><br><br>
    <div class="container-fluid">
        <br><br><br><br>
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4 card bg-dark text-white text-center">
                <div class="card-header mb-3"> <b> Connexion </b> </div>
                <div class="card-body text-white bg-secondary">
                    <form method="post" action="{{route('login')}}">
                        @csrf 
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <label for="exampleInputEmail1" class="form-label" name="email">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <br>
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                  options supplémentaire
                  <br>
                </div>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>