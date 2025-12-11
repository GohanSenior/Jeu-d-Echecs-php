<?php
class Tour extends PieceEchecs
{

    /**
     * Vérifie si la tour peut aller à la position (x, y)
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function peutAllerA($x, $y): bool
    {
        if (!$this->estDansLEchiquier($x, $y))
            return false;
        elseif (($x === $this->getX() && $y !== $this->getY()) || ($x !== $this->getX() && $y === $this->getY()))
            return true;
        else
            return false;
    }
}