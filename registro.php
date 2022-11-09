<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #fccb90;
            /* Chrome 10-25, Safari 5.1-6 */
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgb(252, 203, 144), rgb(213, 126, 235));
            font: 14px/20px "Lato", Arial, sans-serif;
            padding: 0px 0;
            color: white;
        }

        .form-control {
            height: 40px;
            box-shadow: none;
            color: #969fa4;
        }

        .form-control:focus {
            border-color: #5cb85c;
        }

        .form-control,
        .btn {
            border-radius: 3px;
        }

        .signup-form {
            width: 450px;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;
        }

        .signup-form h2 {
            color: #636363;
            margin: 0 0 15px;
            position: relative;
            text-align: center;
        }

        .signup-form h2:before,
        .signup-form h2:after {
            content: "";
            height: 2px;
            width: 30%;
            background: #532a2a;
            position: absolute;
            top: 50%;
            z-index: 2px;
        }

        .signup-form h2:before {
            left: 0;
        }

        .signup-form h2:after {
            right: 0;
        }

        .signup-form .hint-text {
            color: #999;
            margin-bottom: 30px;
            text-align: center;
        }

        .signup-form form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #f2f3f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
            overflow-x: hidden;
            overflow-y: scroll;
        }

        .signup-form .form-group {
            margin-bottom: 20px;
        }

        .signup-form input[type="checkbox"] {
            margin-top: 3px;
        }

        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            min-width: 140px;
            outline: none !important;
        }

        .signup-form .btn {
            font-size: 16;
            font-weight: bold;
            min-width: 140px;

        }

        .signup-form .row div:first-child {
            padding-right: 10px;
        }

        .signup-form .row div:last-child {
            padding-left: 10px;
        }

        .signup-form a {
            color: #fff;
            text-decoration: underline;
        }

        .signup-form a:hover {
            text-decoration: none;
        }

        .signup-form form a {
            color: #5cb85c;
            text-decoration: none;
        }

        .signup-form form a:hover {
            text-decoration: underline;
        }
    </style>
    <title>REGISTROS</title>
</head>

<body>
    <div class="signup-form">
        <form action="/examples/actions/confirmation.php" method="post" style="height: 570px;">
            <h2>Register</h2>
            <p class="hint-text">Create your account. It's free and only takes a minute.</p>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="age" placeholder="Age" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="gender" placeholder="Gender" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="study" class="form-control" name="degree of study" placeholder="Degree of Study" required="required">
            </div>
            <div class="form-group">
                <input type="institut" class="form-control" name="institut where he works" placeholder="Institut where he works" required="required">
            </div>
            <div class="form-group">
                <input type="department" class="form-control" name="ascription area" placeholder="Ascription area" required="required">
            </div>
            <div class="form-group">
                <input type="location" class="form-control" name="location of the institute" placeholder="Location of the institute" required="required">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
            </div>
            <div class="form-group">
                <label class="form-check-label">
                    <input type="checkbox" required="required"> I accept the
                    <a href="#">Terms of Use</a> &amp;
                    <a href="#">Privacy Policy</a>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
                <button type="submit" class="btn btn-success btn-lg btn-block"><a href="invitado.php">Invitado</a></button>
            </div>
        </form>
        <div class="text-center">Already have an account?
            <a href="login.php">Sign in</a>
        </div>
    </div>
</body>

</html>