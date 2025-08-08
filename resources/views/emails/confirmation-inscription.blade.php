<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'inscription</title>
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
                            <h1 style="color: #EA4D28;">Confirmation d'inscription</h1>
                            <p>Bonjour {{ $nom_prenom }},</p>
                            <p>Votre demande d'inscription pour la <strong>Rencontre Professionnelle 2026</strong> a bien été prise en compte.</p>
                            <p>Nous vous remercions de votre intérêt et nous vous contacterons très prochainement pour finaliser les détails de votre participation.</p>
                            <p>Cordialement,<br>L'équipe d'ACD Corporate Services</p>
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