<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>

    <div class="container">

        <h3 align="center" id='titre'class="mt-5">Gestion des Articles</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-18">

            <div class="form-area">
                <form method="POST" action="/articles/store" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nom de l'article</label>
                            <input type="text" class="form-control" name="nom">
                        </div>
                        <div class="col-md-6">
    <label for="type">Type</label>
    <select class="form-control" name="type" id="type">
        <option value="">Sélectionnez le type</option>
        <option value="à la une" {{ old('type') == 'à la une' ? 'selected' : '' }}>À la une</option>
        <option value="Non-vedette" {{ old('type') == 'Non-vedette' ? 'selected' : '' }}>Non-vedette</option>
    </select>
    @error('type')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

                        <div class="col-md-12">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" ></textarea>

                        </div>
                        
                        <div class="col-md-4">
                            <label for="">ajouter un image(url)</label>
                            <br>
                            <input type="text"class="form-control" name="image" /><br />

                        </div>
                        <div class="row1">
                        <div class="col-md-12 mt-5">
                            <input type="submit" class="btn btn-primary" value="envoyer">
                        </div>
                    </div>
          
                    </div>
                    

                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>