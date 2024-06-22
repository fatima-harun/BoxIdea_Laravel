<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Xalaat</title>
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
   <div>
      <div class="container">
          <div class="box1">
               <h1>De Vos Idées Naissent Nos Actions</h1>
             <p>  Bienvenue dans notre boîte à idées dédiée aux habitants ! 
                Nous croyons en la force de vos idées pour enrichir et améliorer
                notre commune. Que vous ayez une suggestion pour aménager nos espaces 
                verts, améliorer nos services municipaux ou organiser des événements 
                communautaires, chaque idée compte. Nous vous encourageons à partager
                vos propositions, car ensemble, nous pouvons faire une réelle différence.
             </p>
             <a href="/ajout">
                <button class="btn2">Proposer une idée</button>
             </a>
          </div>
          <div>
          <!-- <img src="{{asset('https://img.freepik.com/vecteurs-libre/groupe-multiracial-gens-heureux-agitant-main_107791-14112.jpg?t=st=1719071930~exp=1719075530~hmac=e732c512d1141c8a424f293bede43c5f4aeee3a9b3670d541039686e61f6a501&w=1380')}}" alt="" width="auto" height="300"> 
           -->
           <img src="{{asset('images\2207_w048_n005_187b_p1_187.jpg')}}" alt="" width="auto" height="300">
          </div>
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
    p{
        font-size:2.3vh;
        width: 75vh;
        line-height:4vh
    }
    .container{
        display:flex;
        justify-content:space-evenly;
        margin-top:17vh
    }
    .btn2{
        font-size:2vh;
        border-radius:4vh;
        background-color:#2D4733;
        color:#f5f6fa;
        border-width:thin;
        font-weight:400;
        padding:1vh
    }
   </style>
</body>
</html>