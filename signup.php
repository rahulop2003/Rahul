<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Daily Expense Tracker</h1>
    <div class="container">
        <form action="index.php">
            <h3>Sign Up</h3>
            <div class="form-group">
                <hr>
                <input type="text" class="form-control" id="txt-name" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="txt-mail" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="txt-number" placeholder="Mobile Number">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="txt-pwd" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="txt-rpwd" placeholder="Repeat Password">
            </div>
            <form>
                <div class="form-group">
                  <input type="file" class="form-control" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="index.html"><input type="button" class="btn btn-primary btn-right" value="Login"></a>
              </form>

        </form>
    </div>
</body>

</html>