<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard du personnel</title>
</head>
<body>
<form action="{{route('logout')}}" method="post">
        @csrf
        @method('DELETE')
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Se déconnecter</button>
      </form>
    </div>
  </div>
</nav>
<div>
    <h1>bienvenue {{Auth::user()->nom}} </h1>
</div>
</body>
</html>