<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    






<!-- data tables -->



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.js"></script> 



</head>
<body>

    <!-- navbar -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <img src="{{url('images/clipart.png')}}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Dilru Pharmacy
    </a>
  </nav>
  
  
<div class="container">
    @yield('content')
</div>


</body>
</html>