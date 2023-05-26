
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Confirmation de suppression</title>
</head>
<body>
    <button id="deleteButton" onclick="openPopup()">Supprimer le message</button>

    <div class="popup" id="popup">
        <div class="popup-content">
            <h2>Confirmation de suppression</h2>
            <p>Êtes-vous sûr de vouloir supprimer ce message ?</p>
            <div class="buttons">
                <button onclick="closePopup()">Non</button>
                <button onclick="deleteMessage()">Oui</button>
            </div>
        </div>
    </div>



    <script src="script.js"></script>
</body>
</html>

