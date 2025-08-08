<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
            color: #333333;
        }
        .content ul {
            list-style-type: none;
            padding: 0;
        }
        .content li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" style="padding: 20px 0;">
                <table class="container" width="600" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="header">
                            <img src="{{ $message->embed(public_path('images-pro/logo.png')) }}" alt="Logo ACD Corporate Services">
                        </td>
                    </tr>
                    <tr>
                        <td class="content" style="padding: 20px;">
                            <h1 style="color: #EA4D28;">Nouvelle Inscription</h1>
                            <p>Une nouvelle personne s'est inscrite via le formulaire de la page "Rencontre Professionnelle 2026".</p>
                            <ul>
                                <li><strong>Nom & Prénom :</strong> {{ $inscription->nom_prenom }}</li>
                                <li><strong>Entreprise :</strong> {{ $inscription->entreprise ?? 'N/A' }}</li>
                                <li><strong>Fonction :</strong> {{ $inscription->fonction ?? 'N/A' }}</li>
                                <li><strong>Destinations choisies :</strong> {{ implode(', ', $inscription->destinations_choisies) }}</li>
                                <li><strong>Téléphone :</strong> {{ $inscription->telephone }}</li>
                                <li><strong>WhatsApp :</strong> {{ $inscription->whatsapp ?? 'N/A' }}</li>
                                <li><strong>Email :</strong> {{ $inscription->email }}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="footer">
                            <p>&copy; {{ date('Y') }} ACD Corporate Services. Tous droits réservés.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>