<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Admin login</title>
</head>

<body>

</body>

</html>
<div class="container">
<div class="mt-3 text-center">
<h1>Admin Login</h1>
</div>
    <div class="row">
        <div class="col-3 mx-auto">
            <form action="login" method="POST">
                .<div class="form-group">
                    <label for="username"></label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter User Name" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="text" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">max 8 characters</small>
                </div>
                <div class="d-grid">
                <a class="btn btn-primary mt-3" href="/admindashboard">Login</a>
                </div>
            </form>
        </div>
    </div>
</div>