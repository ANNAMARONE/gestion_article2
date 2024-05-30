<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./detail.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container" id="container">
    <div class="row">
      <div class="col">
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
    </div>
    <div class="col " id="commentaire">
      @foreach ($commentaires as $commentaire)
      <div class="card mt-3" style="width: 18rem;">
      <img src="https://cdn.pixabay.com/photo/2016/08/28/23/24/sunflower-1627193_1280.jpg" class="card-img-top" alt="...">
      <div class="card-body">



        <h5 class="card-title">{{$commentaire->nom_complet_auteur}}</h5>
        <p class="card-text">{{$commentaire->contenu}}</p>
        <div class="bg-lithe clearfix" id="btn">
        <a href="{{ route('commentaire.edit',['id'=>$commentaire->id, 'article_id'=>$article->id])}}">
        <button type="button" class="btn btn-primary float-start"><i class="fa-solid fa-pen-to-square" style="color: #ffff;"></i></button>
    </a>
 
  <form action="{{ route('commentaire.destroy',$commentaire->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-end"> <i class="fa-solid fa-trash-can-arrow-up" style="color: #FFFF;"></i> </button>
                            </form>
</div>

      </div>
      </div>
    @endforeach

    </div>

  </div>
  </div>


  <style>
    .form-area {
      padding: 20px;
      margin-top: 20px;
      background-color: #b3e5fc;
    }

    .bi-trash-fill {
      color: red;
      font-size: 18px;
    }

    .bi-pencil {
      color: green;
      font-size: 18px;
      margin-left: 20px;
    }

    .button {
      display: flex;
      margin: 10%;
      padding-top: 10%;

    }

    .carte {
      margin-top: 5%;
      display: flex;
      margin-left: 2%;
      margin-right: 5%;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .card-title {
      font-size: 30px;
      margin: 10px;
      font-weight: bolder;
    }

    .card-date {
      color: blue;
    }

    #container {
      display: flex;
    }

    #commentaire {
      margin-top: 10%;
      margin-left: 20%;
    }
  </style>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3">
    <h2>Ajouter un commentaire</h2>

    <form action="/commentaire/traitement" method="post">
      @csrf
      <input type="hidden" name="article_id" value="{{$article->id}}">
      <div class="mb-3">
        <label for="comment">Nom:</label><br>
        <input type="text" name="nom_complet_auteur" placeholder="saisir votre nom">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Commentaire:</label>
        <textarea class="form-control" rows="5" id="comment" name="contenu"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">envoyer</button>
    </form>
  </div>

</body>

</html>