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
        <h2>Textarea</h2>
        <p>Use the .form-control class to style textareas as well:</p>
        <form action="/article/{{$article_id}}/commentaire/update/{{$reponse->id}}" method="POST">
        @csrf
        @method('post')

            <div class="mb-3">
                <label for="comment">Nom:</label><br>
                <input type="text" name="nom_complet_auteur" placeholder="saisir votre nom"
                    value="{{$reponse->nom_complet_auteur}}">
            </div>
            <div class="mb-3 mt-3">
                <label for="comment">Comments:</label>
                <input type="text" class="form-control" rows="5" id="comment" name="contenu"
                    value="{{$reponse->contenu}}">
            </div>
            <button type="submit" class="btn btn-success">Modifier</button>
        </form>
    </div>

</body>

</html>