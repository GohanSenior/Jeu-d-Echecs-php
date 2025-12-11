<?php // test.php
spl_autoload_register(function ($classe) {
    include "classes/" . $classe . ".class.php";
});

const RC = "\n";

try {
    // $cavalierBlanc = new Cavalier(3, 5, PieceEchecs::BLANCHE);
    // $cavalierNoir = new Cavalier(6, 7, PieceEchecs::NOIRE);
    // $fouBlanc = new Fou(4, 4, PieceEchecs::BLANCHE);
    // $fouNoir = new Fou(3, 2, PieceEchecs::NOIRE);

    // $tPieces = [
    //     $cavalierBlanc,
    //     $cavalierNoir,
    //     $fouBlanc,
    //     $fouNoir
    // ];
    // foreach ($tPieces as $piece) {
    //     echo $piece . " " . ($piece->peutAllerA(5, 5) ? "peut" : "ne peut pas") . " aller en (5, 5)" . RC;
    // }

    // $roiBlanc = new Roi(4, 4, PieceEchecs::BLANCHE);
    // echo $roiBlanc . RC;
    // echo ($roiBlanc->peutAllerA(5, 5) ? "peut" : "ne peut pas") . " aller en (5, 5)" . RC;
    // echo ($roiBlanc->peutAllerA(3, 4) ? "peut" : "ne peut pas") . " aller en (3, 4)" . RC;
    // echo ($roiBlanc->peutAllerA(6, 5) ? "peut" : "ne peut pas") . " aller en (6, 5)" . RC;
    // echo ($roiBlanc->peutAllerA(4, 4) ? "peut" : "ne peut pas") . " aller en (4, 4)" . RC;
    // echo RC;

    // $pionNoir = new Pion(2, 7, PieceEchecs::NOIRE);
    // echo $pionNoir . RC;
    // echo ($pionNoir->peutAllerA(1, 6) ? "peut" : "ne peut pas") . " aller en (1, 6)" . RC;
    // echo ($pionNoir->peutAllerA(2, 6) ? "peut" : "ne peut pas") . " aller en (2, 6)" . RC;
    // echo ($pionNoir->peutAllerA(2, 5) ? "peut" : "ne peut pas") . " aller en (2, 5)" . RC;
    // echo RC;

    // $pionBlanc = new Pion(6, 2, PieceEchecs::BLANCHE);
    // echo $pionBlanc . RC;
    // echo ($pionBlanc->peutAllerA(6, 4) ? "peut" : "ne peut pas") . " aller en (6, 4)" . RC;
    // echo ($pionBlanc->peutAllerA(1, 4) ? "peut" : "ne peut pas") . " aller en (1, 4)" . RC;
    // echo ($pionBlanc->peutAllerA(6, 5) ? "peut" : "ne peut pas") . " aller en (6, 5)" . RC;
    // echo RC;

    // Affichage de l'échiquier
    $echiquier = new Echiquier();
    $echiquier->afficherEchiquier();


    // $cavalierBlanc = new Cavalier(5, 5, PieceEchecs::BLANCHE);
    // echo $cavalierBlanc . RC;
    // $pionNoir = new Pion(4, 7, PieceEchecs::NOIRE);
    // echo $pionNoir . RC;
    // $fouNoir = new Fou(4, 4, PieceEchecs::NOIRE);
    // echo $fouNoir . RC;
    // $pionBlanc = new Pion(5, 3, PieceEchecs::BLANCHE);
    // echo $pionBlanc . RC;
    // $roiBlanc = new Roi(5, 4, PieceEchecs::BLANCHE);
    // echo $roiBlanc . RC;
    // echo RC;
    // echo "Le cavalier blanc" . ($cavalierBlanc->peutManger($pionNoir) ? " peut" : " ne peut pas") . " manger le pion noir" . RC;
    // echo "Le pion noir" . ($pionNoir->peutManger($cavalierBlanc) ? " peut" : " ne peut pas") . " manger le cavalier blanc" . RC;
    // echo "Le pion blanc" . ($pionBlanc->peutManger($fouNoir) ? " peut" : " ne peut pas") . " manger le fou noir" . RC;
    // echo "le fou Noir" . ($fouNoir->peutManger($pionBlanc) ? " peut" : " ne peut pas") . " manger le pion blanc" . RC;
    // echo "le roi Blanc" . ($roiBlanc->peutManger($pionBlanc) ? " peut" : " ne peut pas") . " manger le pion blanc" . RC;
    // echo "le roi Blanc" . ($roiBlanc->peutManger($fouNoir) ? " peut" : " ne peut pas") . " manger le pion blanc" . RC;


} catch (PieceEchecsExceptions $e) {
    echo "Erreur : " . $e->getMessage() . RC;
}