<?php

  $lesProducteurs = ProducteurDAO::lesProducteurs();

  $formulaireProducteurs = new Formulaire('post', 'index.php', 'fProducteurs', '');
  foreach ($lesProducteurs as $producteur) {
    $lesProduits = ProduitDAO::lesProduits($producteur);

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

    foreach($lesProduits as $produit){

      $formulaireProducteurs->ajouterComposantLigne($formulaireProducteurs->creerLabel($produit->getNom()), 1);
      $formulaireProducteurs->ajouterComposantTab();

      $formulaireProducteurs->ajouterComposantLigne($formulaireProducteurs->creerLabel($produit->getDescriptif()), 1);
      $formulaireProducteurs->ajouterComposantTab();

      $formulaireProducteurs->ajouterComposantLigne($formulaireProducteurs->creerLabel($produit->getUnite()), 1);
      $formulaireProducteurs->ajouterComposantTab();
    }

  }
  $formulaireProducteurs->creerFormulaire();


  include_once "vues/squeletteVisiteur.php";

 ?>
