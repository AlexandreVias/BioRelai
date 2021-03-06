<?php
if(!isset($_SESSION['identification']) || ! $_SESSION['identification']){

    $formulaireConnexion = new Formulaire('post', 'index.php', 'fConnexion', '');
    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabelFor('login', 'Login :'), 1);
    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputTexte('login', 'login', '', 1 ,'', 0), 1);
    $formulaireConnexion->ajouterComposantTab();

    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabelFor('mdp', 'Mot de passe :'), 1);
    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputPass('mdp', 'mdp', 1, ''), 1);
    $formulaireConnexion->ajouterComposantTab();

    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputSubmit('submitConnex', 'submitConnex', 'Valider'),2);
    $formulaireConnexion->ajouterComposantTab();

    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel($messageErreurConnexion, "messageErreurConnexion"),2);
    $formulaireConnexion->ajouterComposantTab();

    $formulaireConnexion->creerFormulaire();

    include_once 'vues/squeletteConnexion.php';

}
else{
    $_SESSION['identification']=[];
    header('location: index.php');

}
?>
