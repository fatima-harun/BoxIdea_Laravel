<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Liste des idées</title>
    <style>
        body {
            margin: 0;
            /* background-color:#F5F5F5 */
        }
        nav {
            display: flex;
            justify-content: space-around;
        }
        .list {
            display: flex;
            gap: 8vh;
            list-style: none;
            font-size: 2.5vh;
        }
        .list a {
            text-decoration: none;
            color: #2D4733;
        }
        header {
            margin-top: 3vh;
        }
        .logo {
            height: auto;
            width: 15vh;
        }
        .list, .btn {
            margin-top: 4vh;
        }
        .btn button {
            font-size: 2vh;
            border-radius: 3vh;
            background-color: #2D4733;
            color: #f5f6fa;
            padding: 1vh;
            border-width: thin;
            font-weight: 400;
        }
        .card {
            margin: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 40%;
            /* max-width: 600px; */
            display:flex
        }
        .card-header {
            background-color: #2D4733;
            color: white;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }
        .card-body {
            padding: 10px;
        }
        .card-title {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .card-text {
            font-size: 1em;
            color: #666;
        }
        .card-text:last-child {
            margin-top: 10px;
        }
        .card-text.created-at {
            font-style: italic;
        }
        .btn-card {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></div>
            <div class="list">
                <li><a href="/">Accueil</a></li>
                <li><a href="/lister">Liste des idées</a></li>
                <li><a href="">Contact</a></li>
            </div>
            <div class="btn">
                <a href="#"><button>Se connecter</button></a> 
            </div>
        </nav>
    </header>

    @foreach ($idees as $idee)
    <div class="card">
        <h5 class="card-header">{{ $idee->auteur }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $idee->titre }}</h5>
            <p class="card-text">{{ Str::limit($idee->description, 80) }}</p>
            <p class="card-text created-at">{{ $idee->created_at }}</p>
            <a href="/detailsIdee/{{ $idee->id }}" class="btn-card"><button>Voir plus</button></a>
        </div>
    </div>
    @endforeach

</body>
</html>
