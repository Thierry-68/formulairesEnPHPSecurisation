# Formulaires en PHP Securisation
Pour interagir avec l'utilisateur, le formulaire est l'un des principaux moyens de le faire.

## Critères de validation

    Le formulaire de contact comporte toujours les champs :
    nom,
    prénom,
    e-mail,
    téléphone,
    sujet (sous forme de liste déroulante)
    message (textarea).

**Côté PHP :**
Tous les champs sont requis et ne doivent pas être vides. Le format du champ e-mail doit être en plus vérifié à l'aide de filter_var.

**Côté client / front :**

Tous les champs sont requis. De plus, la validité du champ e-mail est également vérifiée pour correspondre au format attendu.

Le code est disponible sur un dépot Github.