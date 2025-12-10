<?php

class Roi extends PieceEchecs
{

    /**
     * Vérifie si la pièce peut aller à la position (x, y)
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function peutAllerA(int $x, int $y): bool
    {
        if (!$this->estDansLEchiquier($x, $y))
            return false;
        elseif (abs($x - $this->getX()) <= 1 && abs($y - $this->getY()) <= 1 && (!($x === $this->getX() && $y === $this->getY())))
            return true;
        else
            return false;
    }
}