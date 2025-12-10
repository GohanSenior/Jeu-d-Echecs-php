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
        else if ($x == $this->getX() && $y == $this->getY() + $direction)
            return true;

        // Déplacement double depuis la position initiale
        else if (
            ($this->getCouleur() == self::BLANCHE && $this->getY() == 2) ||
            ($this->getCouleur() == self::NOIRE && $this->getY() == 7)
        ) {
            if ($x == $this->getX() && $y == $this->getY() + 2 * $direction) {
                return true;
            } else
                return false;
        } else
            return false;
    }
}