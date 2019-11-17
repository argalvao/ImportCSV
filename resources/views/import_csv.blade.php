<!DOCTYPE html>
<html>
 <head>
  <title>Import CSV File in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">

      setTimeout(function() {
          window.location.href = "http://localhost:8000/import_csv/import";
      }, 500);
  </script>
 </head>
 <body>
  <br />
  
  <div class="container">
   <h3 align="center">Import CSV File in Laravel</h3>
    <br />
   @if(count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form enctype="multipart/form-data" action="{{ route('import.csv') }}">
    {{ csrf_field() }}
   </form>
   
   <br />
  <div class="container-fluid">
        @yield('content')
  </div>
 </body>
</html>