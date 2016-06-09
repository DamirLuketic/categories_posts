<!DOCTYPE html>
<html lang="en">

<head>

@include('layouts.header')

</head>

<body id="admin-page">

<div id="wrapper">
    
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        @include('layouts.menu')

        @include('layouts.sidebar')

                    <!-- /.navbar-static-side -->
    </nav>


</div>

<!-- Page Content -->

@include('layouts.content')

<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@include('layouts.footer')

</body>

</html>
