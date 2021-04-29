<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Register user</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Register</h3></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="registerAnswer">
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" name="name" value="" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">E-mail Address</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" name="email" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-4 control-label">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password-confirm" name="confirm" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary" name="save">
                                            Register
                                        </button>
                                    </div>
                                </div>
                                <p style="padding-top: 10px;"><a href="./">Web site</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>