<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
      <script  src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    </head>
    <body>
                    
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container">
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.register') }}">Register</a>
                            </li>
                      
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                            </li>
                        
                    </ul>
        
                </div>
            </div>
        </nav>
  
@yield('content')
     
    </body>
    <script>
$(document).ready( function () {
    $('.data-table').DataTable();
} );
</script>
</html>
