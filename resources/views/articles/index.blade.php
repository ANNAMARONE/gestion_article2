<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    

    <div class="container">

        <h3 align="center" id='titre'class="mt-5">Liste des Articles</h3>
        <button type="button" class="btn btn-primary btn-lg"><a href="/articles/create">ajouter un article</a></button>

    <div class="carte">
            @foreach ($Article as $key => $article )
            
            <div class="card" style="width:30rem;">
            <button>{{$article->type}}</button>
  <img src="{{$article->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->nom}}</h5>
     <p class="card-date">créer le:{{$article->created_at}}</p>
     <a class="detail" href="{{route('articles.detail',$article->id)}}"> details<i class="fa-solid fa-eye fa-flip-horizontal" style="color: #b3e5fc;"></i></a>
   
    <div class="bg-info clearfix" id="btn">
        <a href="{{ route('articles.edit',$article->id)}}">
        <button type="button" class="btn btn-primary float-start">modifier <i class="fa-solid fa-pen-to-square" style="color: #ffff;"></i></button>
    </a>
 
  <form action="{{ route('articles.destroy',$article->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-end">suprimer  <i class="fa-solid fa-trash-can-arrow-up" style="color: #FFFF;"></i> </button>
                            </form>
</div>
  </div>
  </div>

  @endforeach  
  </div> 
</body>
</html>