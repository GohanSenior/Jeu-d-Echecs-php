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
    $roiBlanc = new Roi(4, 4, PieceEchecs::BLANCHE);
    echo $roiBlanc . RC;
    echo ($roiBlanc->peutAllerA(5, 5) ? "peut" : "ne peut pas") . " aller en (5, 5)" . RC;
    echo ($roiBlanc->peutAllerA(3, 4) ? "peut" : "ne peut pas") . " aller en (3, 4)" . RC;
    echo ($roiBlanc->peutAllerA(6, 5) ? "peut" : "ne peut pas") . " aller en (6, 5)" . RC;
    echo ($roiBlanc->peutAllerA(4, 4) ? "peut" : "ne peut pas") . " aller en (4, 4)" . RC;
    echo RC;

    $pionNoir = new Pion(2, 7, PieceEchecs::NOIRE);
    echo $pionNoir . RC;
    echo ($pionNoir->peutAllerA(1, 6) ? "peut" : "ne peut pas") . " aller en (1, 6)" . RC;
    echo ($pionNoir->peutAllerA(2, 6) ? "peut" : "ne peut pas") . " aller en (2, 6)" . RC;
    echo ($pionNoir->peutAllerA(2, 5) ? "peut" : "ne peut pas") . " aller en (2, 5)" . RC;
    echo RC;

    $pionBlanc = new Pion(6, 2, PieceEchecs::BLANCHE);
    echo $pionBlanc . RC;
    echo ($pionBlanc->peutAllerA(6, 4) ? "peut" : "ne peut pas") . " aller en (6, 4)" . RC;
    echo ($pionBlanc->peutAllerA(1, 4) ? "peut" : "ne peut pas") . " aller en (1, 4)" . RC;
    echo ($pionBlanc->peutAllerA(6, 5) ? "peut" : "ne peut pas") . " aller en (6, 5)" . RC;
    echo RC;

} catch (PieceEchecsExceptions $e) {
    echo "Erreur : " . $e->getMessage() . RC;
}