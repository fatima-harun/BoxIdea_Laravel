<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Administrateur</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <nav>
        <div><img src="{{asset('images/logo.png')}}" alt="" class="logo"></div>
        <div class="list">
            <li><a href="/">Accueil</a></li>
            <li><a href="/lister">Liste des idées</a></li>
            <li><a href="">Contact</a></li>
        </div>
        <div class="btn">
            <a href="/login"><button>Se connecter</button></a> 
        </div>
    </nav>
</header>

<p>Espace réservé aux personnels</p>

<div class="container">
    <div class="form-container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div>
                <label for="name">Nom complet</label>
                <input type="text" id="name" name="nom" required>
            </div>
            <div>
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</div>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: white;
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

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 5vh;
}

.form-container {
    background-color: white;
    padding: 4vh;
    border-radius: 5vh;
    box-shadow: 0 0 2vh rgba(0,0,0,0.1);
}

.alert {
    padding: 2vh;
    border-radius: 2vh;
    margin-bottom: 2vh;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
}

form {
    display: flex;
    flex-direction: column;
}

form div {
    margin-bottom: 3vh;
}

form label {
    font-size: 2vh;
    margin-bottom: 1vh;
}

form input {
    width: 50vh;
    padding: 2vh;
    font-size: 2vh;
    border: 1px solid #ccc;
    border-radius: 2vh;
}

form button {
    font-size: 2.5vh;
    background-color: #2D4733;
    color: white;
    padding: 2vh 4vh;
    border: none;
    border-radius: 3vh;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #608C70;
}

p {
    font-size: 3vh;
    background-color: #2D4733;
    color: white;
    padding: 2vh;
    text-align: center;
    margin: 5vh auto;
    border-radius: 3vh;
    width: fit-content;
}
</style>

</body>
</html>
