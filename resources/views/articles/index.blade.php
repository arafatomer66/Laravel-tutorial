<!DOCTYPE html>
<html>
<head>
<title>Articles</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container">

<h1>Articles</h1>
@if( count($articles) > 0) 
   @foreach($articles as $article)
    
    <div class="well">
       
       <h3> {{ $article->body }} </h3>
    
    </div>


   @endforeach
@else
  <p>No article found</p>

@endif
</body>
</html>