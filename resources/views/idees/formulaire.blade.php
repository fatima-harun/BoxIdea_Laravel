<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposition d'idées</title>
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
             <a href="/login"><button>Se connecter</button></a> 
           </div>
        </nav>
   </header>
    <p>Faites nous part de vos idées</p>
    <div class="container2">
     <div>
       <img src="{{asset('https://img.freepik.com/vecteurs-libre/vote-par-internet-electronique_74855-4427.jpg?t=st=1719076838~exp=1719080438~hmac=d6fcac1822d1c9857c9706388c99661b783f39b3232e18a8201a847741891d03&w=996')}}" alt="" width="auto" height="450">
     </div>
     <div>
       <form action="{{route ('traitement')}}" method="POST">
        @csrf
       <div><label for="">Votre nom complet</label></div>
       <div><input type="text" name="auteur"></div>
       <div><label for="">Votre email</label></div>
        <div><input type="email" name="email"></div>
        <div><label for="">Titre de l'idée</label></div>
        <div><input type="text" name="titre"></div>
        <div><Label>Catégorie</Label></div>
        <select name="categorie_id" id="">
            <option value="" disabled selected>Choisir une catégorie</option>
            @foreach($categories as $categorie)
            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
            @endforeach
        </select>
        <div><label for="description">Description</label></div>
<div><textarea id="description" name="description" rows="10" cols="50"></textarea></div>


        <button class="btn-propose">Proposer mon idée</button>
       </form>
     </div>
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
        color:#1e3799;
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
        background-color:#fa983a;
        color:#f5f6fa;
        padding:1vh;
        font-weight:400;
        border:none
    }
    .container2{
        display:flex;
        justify-content:center
    }
    form{
        margin-top:5.5vh
    }
    input{
        width: 60vh;
        padding:2vh
    }
    form div{
        margin-bottom:1vh
    }
    p{
        /* text-align:center; */
        font-size:3vh;
        background-color:#1e3799;
        color:white;
        padding:2vh;
        width: 35vh;
        margin-left:80vh
    }
    .btn-propose{
        font-size:2vh;
        border-radius:3vh;
        background-color:#fa983a;
        color:#f5f6fa;
        padding:1vh;
        font-weight:400;
        border:none
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
    </style>
</body>
</html>