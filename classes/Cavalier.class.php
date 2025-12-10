<?php
class Cavalier extends PieceEchecs
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
        elseif (pow($x - $this->getX(), 2) + pow($y - $this->getY(), 2) === 5)
            return true;
        else
            return false;
    }
}