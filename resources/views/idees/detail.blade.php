<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Détail de l'idée</title>
</head>
<body>
<header>
        <nav>
            <div><img src="{{asset('images\logo.png')}}" alt="" class="logo"></div>
            <div class="list">
             <li><a href="/">Acceuil</a></li>
             <li><a href="/lister">Liste des idées</a></li>
              <li><a href="">Contact</a></li>
           </div>
          <div class="btn">
             <a href=""><button>Se connecter</button></a> 
           </div>
        </nav>
   </header>
    <div class="container mt-5">
        <h1>{{ $idee->titre }}</h1>
        <h3>Auteur: {{ $idee->auteur }}</h3>
        <p>{{ $idee->description }}</p>
        <p><strong>Date de création:</strong> {{ $idee->created_at }}</p>
    </div>
    <div>
        @foreach($commentaires as $commentaire)
        <p>{{ $commentaire->nom_auteur }}</p>
        <p>{{ $commentaire->libelle }}</p>
        @endforeach
    </div>
    <h2>Ajouter un commentaire</h2>
        <form action="/sauvegarder/{{$idee->id}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom_auteur" class="form-label">Auteur</label>
                <input type="text" class="form-control" id="nom_auteur" name="nom_auteur" required>
            </div>
            <div class="mb-3">
                <label for="libelle" class="form-label">Commentaire</label>
                <textarea class="form-control" id="contenu" name="libelle" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    <style>
         body{
        margin:0;
        /* background-color:#F5F5F5 */
    }
    nav{
        display:flex;
        justify-content:space-around
    }
    .list{
        display:flex;
        gap:8vh;
        list-style:none;
        font-size:2.5vh;
    }
    .list a{
        text-decoration:none;
        color:#2D4733;
    }
    header{
        margin-top:3vh
    }
    .logo{
        height:auto;
        width:15vh
    }
    .list, .btn {
    margin-top: 4vh;
    }
    .btn button{
        font-size:2vh;
        border-radius:3vh;
        background-color:#2D4733;
        color:#f5f6fa;
        padding:1vh
        border-width:thin;
        font-weight:400;
    }
    </style>
</body>
</html>
