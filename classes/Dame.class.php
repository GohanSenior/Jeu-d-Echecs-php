<?php
class Dame extends PieceEchecs
{

    /**
     * Vérifie si la dame peut aller à la position (x, y)
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function peutAllerA($x, $y): bool
    {
        if (!$this->estDansLEchiquier($x, $y))
            return false;
        elseif (
            (abs($x - $this->getX()) === abs($y - $this->getY()) && $x !== $this->getX()) ||
            ($x === $this->getX() && $y !== $this->getY()) ||
            ($x !== $this->getX() && $y === $this->getY())
        )
            return true;
        else
            return false;
    }
}
