<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard du personnel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #2D4733;
            color: #fff;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar ul li {
            padding: 10px;
            text-align: center;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            background: #3a5849;
            text-decoration: none;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
        .box-icon{
          border-style:none
        }
    </style>
</head>
<body>

<div class="sidebar">
    <ul class="list-unstyled components">
        <li><a href="#">Tableau de Bord</a></li>
        <li><a href="#">Liste des Idées</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-light btn-block">Se déconnecter</button>
            </form>
        </li>
    </ul>
</div>

<div class="content">
    <h1>Bienvenue {{ Auth::user()->nom }}</h1>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Idées</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Liste des Idées</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Auteur</th>
                    <th scope="col">Email</th>
                    <th scope="col">Idée</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Date de Création</th>
                    <th scope="col">Détails</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($idees as $idee)
                <tr>
                    <td>{{ $idee->auteur }}</td>
                    <td>{{ $idee->email }}</td>
                    <td>{{ $idee->titre }}</td>
                    <td>{{ $idee->categorie->nom }}</td> <!-- Assurez-vous que la relation 'category' est définie -->
                    <td>{{ $idee->created_at->format('d/m/Y H:i') }}</td>
                    <td><a href="">Voir</a></td>
                    <td>
                    <form action="{{ route('idee.action', ['id' => $idee->id, 'action' => 'Approuvée']) }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" style="border: none;">
        <box-icon name='like' type='solid' color='#0984e3'></box-icon>
    </button>
</form>

<form action="{{ route('idee.action', ['id' => $idee->id, 'action' => 'Non approuvée']) }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" style="border: none;">
        <box-icon name='dislike' type='solid' color='#d63031'></box-icon>
    </button>
</form>

<form action="{{ route('idee.action', ['id' => $idee->id, 'action' => 'delete']) }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" style="border: none;">
        <box-icon name='minus-circle' color='#718093'></box-icon>
    </button>
</form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
