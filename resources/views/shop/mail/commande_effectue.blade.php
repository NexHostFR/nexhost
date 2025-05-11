<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop - Nxhost</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .details {
            text-align: left;
            margin-top: 20px;
        }
        .details p {
            margin: 10px 0;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Votre serveur est prêt ! 🎉</h1>
        <p>Merci pour votre commande chez Nexhost.</p>

        <div class="details">
            <p><strong>Identifiant :</strong> {{$email}}</p>
            <p><strong>Mot de passe :</strong> Aucun de mod de passe définis, lors de votre connexion faite mot de passe oublié.</p>
        </div>

        <a href="https://panel.nexhost.fr" class="btn">Accéder au panel</a>

        <p class="footer">Si vous avez des questions, contactez notre support.</p>
    </div>
</body>
</html>
