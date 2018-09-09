<!DOCTYPE html>
<html>
<head>
<title>Category</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container">

<h1>Category</h1>
@if( count($categories) > 0) 
   @foreach($categories as $category)
    
    <div class="well">
       
       <h3> {{ $category->name }} </h3>
    
    </div>


   @endforeach


@endif
</body>
</html>