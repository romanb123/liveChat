<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/login-style.css">
    <script src="assets/liveChat.js"></script>

</head>

<body>

    <div class="jumbotron text-center">
        <h1>live chat login</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">

                <form id="login_form" action="/action_page.php">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input  name="password" type="password" class="form-control" id="pwd">
                    </div>
                    <div class="radio">
                        <p>gender:</p>
                        <label><input type="radio" name="optradio" checked>male</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio">female</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>










            </div>
            <div class="col-sm-4">

            </div>
        </div>
    </div>

</body>

</html>