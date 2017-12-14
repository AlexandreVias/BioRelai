<?php

  $lesProducteurs = ProducteurDAO::lesProducteurs();

  $formulaireProducteurs = new Formulaire('post', 'index.php', 'fProducteurs', '');
  foreach ($lesProducteurs as $producteur) {

    $formulaireProducteurs->ajouterComposantLigne($formulaireProducteurs->creerLabel($producteur->getNom()), 1);
    $formulaireProducteurs->ajouterComposantTab();

    $formulaireProducteurs->ajouterComposantLigne($formulaireProducteurs->creerLabel($producteur->getPrenom()), 1);
    $formulaireProducteurs->ajouterComposantTab();

    $formulaireProducteurs->ajouterComposantLigne($formulaireProducteurs->creerLabel($producteur->getAdresse()), 1);
    $formulaireProducteurs->ajouterComposantTab();

    $formulaireProducteurs->ajouterComposantLigne($formulaireProducteurs->creerLabel($producteur->getCodePostal()), 1);
    $formulaireProducteurs->ajouterComposantTab();

    $formulaireProducteurs->ajouterComposantLigne($formulaireProducteurs->creerLabel($producteur->getVille()), 1);
    $formulaireProducteurs->ajouterComposantTab();

    $formulaireProducteurs->ajouterComposantLigne($formulaireProducteurs->creerLabel($producteur->getPresentation()), 1);
    $formulaireProducteurs->ajouterComposantTab();

  }
  $formulaireProducteurs->creerFormulaire();

  include_once "vues/squeletteVisiteur.php";

 ?>
