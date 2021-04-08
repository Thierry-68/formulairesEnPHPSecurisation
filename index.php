<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires en PHP Securisationument</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>   
    <div class="container">
        <h3>Formulaires en PHP Securisation</h3>
        <form class="form" action="thanks.php" method="POST">
            <div class="line">
                <label for="idFirstname">Prenom</label>
                <input type="text" name="user_firstname" required id="idFirstname">
            </div>
            <div class="line">
                <label for="idLastname">Nom</label>
                <input type="text" name="user_name" required id="idLastname">
            </div>
            <div class="line">
                <label for="emidEmailail">E-mail</label>
                <input type="text" name="user_email" required id="idEmail">
            </div>
            <div class="line">
                <label for="idPhone">Telephone</label>
                <input type="text" name="user_phone" required id="idPhone">
            </div>
            <div class="line">
                <label for="idSubject">Sujet</label>
                <select name="subject-select" id="idSubject">
                    <option value="PDC">Demande de renseignements</option>
                    <option value="PDC">Prise de contact</option>
                    <option value="RCM">Reclamation</option>
                    <option value="DRV">Demande de rendez-vous</option>
                    <option value="ARV">Annulation de rendez-vous</option>                    
                </select>               
            </div>
            <div class="line">
                <label for="idMessage">Message</label>
                <textarea name="user_message" id="idMessage" required cols="30" rows="10"></textarea>
            </div>
            <div class="line">
                <button>Enregistrer</button>
            </div>
        </form>
    </div>   
</body>

</html>