<?php
class Echiquier
{

    // Pièces blanches :

    // ♔ U+2654 - Roi blanc
    // ♕ U+2655 - Dame blanche
    // ♖ U+2656 - Tour blanche
    // ♗ U+2657 - Fou blanc
    // ♘ U+2658 - Cavalier blanc
    // ♙ U+2659 - Pion blanc

    // Pièces noires :

    // ♚ U+265A - Roi noir
    // ♛ U+265B - Dame noire
    // ♜ U+265C - Tour noire
    // ♝ U+265D - Fou noir
    // ♞ U+265E - Cavalier noir
    // ♟ U+265F - Pion noir

    // exemple: echo "\u{2654}"; // ♔ Roi blanc

    public function __construct()
    {
    }

    private $pieces = ['Tour', 'Cavalier', 'Fou', 'Dame', 'Roi', 'Fou', 'Cavalier', 'Tour'];
    private array $cases = [];

    public function afficherEchiquier()
    {

        // Affichage de chaque ligne de l'échiquier
        for ($ligne = 8; $ligne >= 1; $ligne--) {
            echo $ligne . " "; // Numéro de ligne

            for ($col = 1; $col <= 8; $col++) {
                if ($ligne == 8) {
                    // Huitième ligne avec les pièces noires
                    switch ($col) {
                        case 1:
                        case 8:
                            // $this->cases[$col][$ligne] = new Tour($col, $ligne, PieceEchecs::NOIRE);
                            echo " \u{265C} "; // Tour noire
                            break;
                        case 2:
                        case 7:
                            echo " \u{265E} "; // Cavalier noir
                            break;
                        case 3:
                        case 6:
                            echo " \u{265D} "; // Fou noir
                            break;
                        case 4:
                            echo " \u{265B} "; // Dame noire
                            break;
                        case 5:
                            echo " \u{265A} "; // Roi noir
                            break;
                    }
                    continue;
                } elseif ($ligne == 7) {
                    // Septième ligne avec les pions noirs
                    echo " \u{265F} "; // Pion noir
                    continue;
                } elseif ($ligne == 2) {
                    // Deuxième ligne avec les pions blancs
                    echo " \u{2659} "; // Pion blanc
                    continue;
                } elseif ($ligne == 1) {
                    // Première ligne avec les pièces blanches
                    switch ($col) {
                        case 1:
                        case 8:
                            echo " \u{2656} "; // Tour blanche
                            break;
                        case 2:
                        case 7:
                            echo " \u{2658} "; // Cavalier blanc
                            break;
                        case 3:
                        case 6:
                            echo " \u{2657} "; // Fou blanc
                            break;
                        case 4:
                            echo " \u{2655} "; // Dame blanche
                            break;
                        case 5:
                            echo " \u{2654} "; // Roi blanc
                            break;
                    }
                    continue;
                }

                // Alternance des cases blanches et noires
                elseif (($ligne + $col) % 2 == 0) {
                    echo "   "; // Case noire
                } else {
                    echo "███"; // Case blanche
                }
            }
            echo "\n";
        }

        // Affichage des numéros de colonnes en bas
        echo "  ";
        for ($col = 1; $col <= 8; $col++) {
            echo " " . $col . " ";
        }
        echo "\n";
    }
}
