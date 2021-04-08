<?php
$errors=[] ;
if (isset($_POST)) {   
    foreach ($_POST as $key => $var) {
        if (empty($var)) {
            switch ($key) {
                case "user_name":
                    $errors[] = "le nom est obligatoire";
                    break;
                case "user_firstname":
                    $errors[] = "le prenom est obligatoire";
                    break;
                case "subject-select":
                    $errors[] = "le sujet est obligatoire";
                    break;
                case "user_email":
                    $errors[] = "l'e-mail est obligatoire";
                    break;
                case "user_phone":
                    $errors[] = "le telephone est obligatoire";
                    break;
                case "user_message":
                    $errors[] = "le message est obligatoire";
                    break;
            }
        }
    }

    if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "l'e-mail non valide !";        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remerciement</title>
</head>

<body>
    <?php
    $result = "";
   
    if (empty($errors)) {
        $name = $_POST["user_name"];
        $firstname = $_POST["user_firstname"];
        $subject = $_POST["subject-select"];
        $email = $_POST["user_email"];
        $message = $_POST["user_message"];
        $phone = $_POST["user_phone"];
        switch ($_POST["subject-select"]){
            case "PDR":
                $subject= " Demande de renseignements ";
                break;
            case "PDC":
                $subject = " Prise de contact ";
                break;
            case "RCM":
                $subject =" Reclamation "; 
            case "DRV" :
                $subject = " Demande de rendez-vous ";
                break;
            case "DRV" :
                $subject = " Annulation de rendez-vous";
                break;   
        }         

        $result = $result . "Merci $firstname $name de nous avoir contacté à propos de $subject ";
        $result = $result . "Un de nos conseiller vous contactera soit à l’adresse $email";
        $result = $result . "ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : ";
        $result = $result . $message;
    } else {        
        $result = "<h3>Erreur de saisie:<h3><ul>";
        foreach ($errors as $value) {
            $result = $result."<li>$value</li>";
        }
        $result =  $result."</ul>";
    }
    ?>

    <article class="">
        <?= $result ?>
    </article>


</body>

</html>