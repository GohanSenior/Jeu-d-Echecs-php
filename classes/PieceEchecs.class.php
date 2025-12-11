<?php

spl_autoload_register(function ($classe) {
    include "classes/" . $classe . ".class.php";
});

abstract class PieceEchecs
{

    // Constantes

    public const int BLANCHE = 1;
    public const int NOIRE = 2;

    // Propriétés

    private int $x;
    private int $y;
    private int $couleur; // 1 = blanche, 2 = noire

    // Constructeur

    /**
     * Construit l'objet
     * @param int $x
     * @param int $y
     * @param int $couleur
     */
    public function __construct(int $x, int $y, int $couleur)
    {
        $this->setPositions($x, $y);
        $this->setCouleur($couleur);
    }

    // Méthodes
    // Getters et Setters

    /**
     * consulte la position en x
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * consulte la position en y
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * Consulte la couleur
     * @return int
     */
    public function getCouleur(): int
    {
        return $this->couleur;
    }

    /**
     * Consulte la couleur de la case
     * @return int
     */
    public function getCouleurCase(): int
    {
        if (($this->x + $this->y) % 2 == 0) {
            return self::BLANCHE; // case blanche
        } else {
            return self::NOIRE; // case noire
        }
    }

    /**
     * Modifie les positions
     * @param int $x
     * @param int $y
     * @return void
     */
    public function setPositions(int $x, int $y): self
    {
        $this->validerPositions($x, $y);
        $this->x = $x;
        $this->y = $y;

        return $this;
    }

    /**
     * Modifie la couleur
     * @param int $couleur
     * @return void
     */
    private function setCouleur(int $couleur): self
    {
        $this->validerCouleur($couleur);
        $this->couleur = $couleur;

        return $this;
    }

    // Méthodes privées de validation

    /**
     * Valide la position sur le damier
     * @param int $x
     * @param int $y
     * @throws Exception
     * @return void
     */
    private function validerPositions(int $x, int $y): void
    {
        if ($x < 1 || $x > 8 || $y < 1 || $y > 8) {
            throw new PieceEchecsExceptions("Les coordonnées x et y doivent être comprises entre 1 et 8");
        }
    }

    /**
     * Valide la couleur
     * @param int $couleur
     * @throws Exception
     * @return void
     */
    private function validerCouleur(int $couleur): void
    {
        if ($couleur !== self::BLANCHE && $couleur !== self::NOIRE) {
            throw new PieceEchecsExceptions("La couleur doit être 1 (blanche) ou 2 (noire)");
        }
    }

    // Autres méthodes

    /**
     * Vérifie si la position (x, y) est dans l'échiquier
     * @param int $x
     * @param int $y
     * @return bool
     */
    protected function estDansLEchiquier(int $x, int $y): bool
    {
        if ($x < 1 || $x > 8 || $y < 1 || $y > 8)
            return false;
        else
            return true;
    }

    /**
     * Vérifie si la pièce peut manger une autre pièce
     * @param PieceEchecs $piece
     * @return bool
     */
    public function peutManger(PieceEchecs $piece): bool
    {
        if (
            $this->getCouleur() !== $piece->getCouleur() &&
            $this->peutAllerA($piece->getX(), $piece->getY())
        ) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Vérifie si la pièce peut aller à la position (x, y)
     * @param int $x
     * @param int $y
     * @return void
     */
    abstract public function peutAllerA(int $x, int $y): bool;

    /**
     * Retourne la représentation textuelle de l'objet
     * @return string
     */
    public function __tostring(): string
    {
        return get_class($this) . " en (" . $this->x . ", " . $this->y . ") de couleur " . ($this->couleur == self::BLANCHE ? "blanche" : "noire");
    }
}