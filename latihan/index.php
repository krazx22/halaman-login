<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid mt-4 ms-4">
        <div class="row">
            <div class="col-md-7 mt-2">
                <div class="card-body mt-5 ms-2">
                    <img src="img/bg.jpg" class="img-fluid rounded-start shadow" alt="...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body mt-3">
                    <div class="mt-5 mb-2 text-center">
                        <img src="img/rpl.png" class="img-fluid" width="65">
                        <h4 class="mt-4 mb-5">Login</h4>
                    </div>
                    <form action="loginact.php" method="post">
                    <div class="mb-3">
                     <input class="form-control" type="username" id="username" name="username">
                     <label class="form-label">fill in your username</label>
                    </div>
                    <div class="mb-3">
                     <input class="form-control" type="password" id=" action" name="password">
                     <label class="form-label">fill in password</label>
                    </div>
                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">SIGN IN</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>