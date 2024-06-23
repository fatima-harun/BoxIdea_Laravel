<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idée Approuvée</title>
</head>
<body>

   
    <h1>Bonjour {{ $idee->auteur }}</h1>
    <p>J'espère que vous vous portez bien.Nous sommes ravis de vous informer que votre idée<strong> {{ $idee->titre }}</strong> crée le <strong>{{ $idee->created_at }}</strong> a été approuvée.</p>

    <p>Merci pour votre engagement dans la communauté.
        N'hésitez pas à nous proposer encore plus d'idées.
    </p>
</body>
</html>
