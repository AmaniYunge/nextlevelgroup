<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Level</title>
    <!-- Core CSS - Include with every page -->
    {{ HTML::style("plugins/bootstrap/bootstrap.css") }}
    {{ HTML::style("fonts/font-awesome/css/font-awesome.css") }}
    {{ HTML::style("plugins/pace/pace-theme-big-counter.css") }}
    {{ HTML::style("css/style.css") }}
    {{ HTML::style("css/main-style.css") }}
    {{ HTML::style("css/jquery-ui.css") }}
    {{ HTML::style("DataTables/media/css/jquery.dataTables.css") }}
    {{ HTML::style("DataTables/media/css/jquery.dataTables_themeroller.css") }}
    {{ HTML::script("js/jquery-1.9.1.js") }}

</head>

<body class="body-Login-back">

<div class="container">

    <div class="row">
        <div style="color: #f5f5f5" class="col-md-4 col-md-offset-4 text-center logo-margin ">
            <h3 style="color: #f5f5f5">Next Level Management System</h3>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    @if(isset($error))
                    <div class="alert alert-danger alert-dismissable" style="padding: 5px">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ $error }}!</strong>
                    </div>
                    @endif
                    <form role="form" method="post" action="{{ url('login')}}">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="keep" type="checkbox" value="keep">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
{{ HTML::script("assets/plugins/jquery-1.10.2.js") }}
{{ HTML::script("assets/plugins/bootstrap/bootstrap.min.js") }}
{{ HTML::script("assets/plugins/metisMenu/jquery.metisMenu.js") }}
<script src="assets/plugins/jquery-1.10.2.js"></script>
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>