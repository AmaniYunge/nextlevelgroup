<!DOCTYPE html>
@if(!Session::has("email"))
{{  Redirect::to("login")  }}

@else
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Level Web Manager</title>
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

<body>
<!--  wrapper -->
<div id="wrapper">
<!-- navbar top -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
<!-- navbar-header -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{url('home')}}">
       <h2 style="color: #f5f5f5">Next Level Management System</h2>
    </a>
</div>
<!-- end navbar-header -->
<!-- navbar-top-links -->
<ul class="nav navbar-top-links navbar-right">

<!-- main dropdown -->

<li class="dropdown">
    <a class=""  href="{{url('logout')}}">
        <i class="fa fa-user fa-3x"></i>
        Logout
    </a>
    <!-- dropdown user-->


    <!-- end dropdown-user -->
</li>
<!-- end main dropdown -->
</ul>
<!-- end navbar-top-links -->

</nav>
<!-- end navbar top -->

<!-- navbar side -->
@include('left')
<!-- end navbar side -->
<!--  page-wrapper -->
<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
        <div class="col-sm-12">
            <h1 class="page-header">@yield('title')</h1>
        </div>
        <!--End Page Header -->
        <div class="col-sm-12">
            @yield('contents')
        </div>
    </div>



</div>
<!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
{{ HTML::script("plugins/jquery-1.10.2.js") }}
{{ HTML::script("plugins/bootstrap/bootstrap.min.js") }}
{{ HTML::script("plugins/metisMenu/jquery.metisMenu.js") }}
{{ HTML::script("plugins/pace/pace.js") }}
{{ HTML::script("plugins/morris/morris.js") }}
{{ HTML::script("plugins/morris/raphael-2.1.0.min.js") }}
{{ HTML::script("scripts/siminta.js") }}
{{ HTML::script("scripts/dashboard-demo.js") }}
{{ HTML::script("js/jquery.form.js") }}
{{ HTML::script("js/jquery-ui-1.10.3.custom.js") }}
{{ HTML::script("bootstrap/js/bootstrap.js") }}
{{ HTML::script("DataTables/media/js/jquery.dataTables.js") }}
{{ HTML::script("js/jquery.form.js") }}

</body>
</html>
@endif
