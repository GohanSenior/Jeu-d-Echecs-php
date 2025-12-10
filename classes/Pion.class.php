<?php

class Pion extends PieceEchecs
{

    /**
     * Vérifie si la pièce peut aller à la position (x, y)
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function peutAllerA(int $x, int $y): bool
    {
        $direction = $this->getCouleur() == self::BLANCHE ? 1 : -1;

        if (!$this->estDansLEchiquier($x, $y))
            return false;

        // Déplacement simple
        elseif ($x == $this->getX() && $y == $this->getY() + $direction)
            return true;

        // Déplacement double depuis la position initiale
        elseif (
            $this->getCouleur() == self::BLANCHE && $this->getY() == 2 ||
            $this->getCouleur() == self::NOIRE && $this->getY() == 7
        ) {
            if ($x == $this->getX() && $y == $this->getY() + 2 * $direction) {
                return true;
            } else
                return false;
        } else
            return false;
    }

    /**
     * Vérifie si le pion peut manger une autre pièce
     * @param PieceEchecs $piece
     * @return bool
     */
    public function peutManger(PieceEchecs $piece): bool
    {
        $direction = $this->getCouleur() == self::BLANCHE ? 1 : -1;

        if (
            $this->getCouleur() !== $piece->getCouleur() &&
            abs($piece->getX() - $this->getX()) == 1 &&
            $piece->getY() == $this->getY() + $direction
        ) {
            return true;
        } else {
            return false;
        }
    }
}