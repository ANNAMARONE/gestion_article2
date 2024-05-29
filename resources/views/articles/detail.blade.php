<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="detail.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="carte">
            
            <div class="card" style="width:50rem;">
           
            <h5 class="card-title"> {{$article->id}}- {{$article->nom}}</h5>
  <img src="{{$article->image}}" class="card-img-top" alt="...">
  <div class="card-body">
   
    <p class="card-text"> {{$article->description}}</p>
    <p class="card-text">type: {{$article->type}}</p>
     <p class="card-date">créer le:{{$article->created_at}}</p>
  
   
    
</div>
  </div>
  </div>

  </div> 
         

  
</body>
</html>