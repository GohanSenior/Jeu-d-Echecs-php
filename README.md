# 🏁 Jeu d'Échecs PHP - Exercice de Formation

## 📝 Description

Ce projet est un exercice réalisé dans le cadre de ma formation **AFPA** pour apprendre et maîtriser les concepts de la **Programmation Orientée Objet (POO)** en PHP. Il s'agit d'une implémentation des pièces d'échecs et de leurs mouvements, avec une simulation d'échiquier.

## 🎯 Objectifs pédagogiques

- Maîtriser les concepts de la POO en PHP
- Comprendre l'héritage et les classes abstraites
- Implémenter des méthodes spécifiques pour chaque pièce d'échecs
- Gérer les exceptions personnalisées
- Utiliser l'autoloading de classes

## 📁 Structure du projet

```markdown
├── index.php                          # Fichier principal avec les tests
└── classes/
    ├── PieceEchecs.class.php          # Classe abstraite de base
    ├── PieceEchecsExceptions.class.php # Gestion des exceptions
    ├── Pion.class.php                 # Classe Pion
    ├── Cavalier.class.php             # Classe Cavalier
    ├── Fou.class.php                  # Classe Fou
    ├── Tour.class.php                 # Classe Tour
    ├── Dame.class.php                 # Classe Dame
    ├── Roi.class.php                  # Classe Roi
    └── Echiquier.class.php            # Classe Échiquier (en développement)
```

## 🧩 Classes implémentées

### Classe abstraite `PieceEchecs`

- Classe de base pour toutes les pièces d'échecs
- Gère la position (x, y) et la couleur (blanche/noire)
- Définit la méthode abstraite `peutAllerA(int $x, int $y): bool`

### Pièces d'échecs

Chaque pièce hérite de `PieceEchecs` et implémente sa logique de mouvement spécifique :

- **♟️ Pion** : Déplacement vers l'avant, possibilité de double mouvement initial
- **🐴 Cavalier** : Déplacement en "L" (mouvement unique aux échecs)
- **👨‍💼 Fou** : Déplacement en diagonal
- **🏰 Tour** : Déplacement horizontal et vertical
- **👑 Dame** : Combinaison des mouvements du Fou et de la Tour
- **🤴 Roi** : Déplacement d'une case dans toutes les directions

### Classe `Echiquier` 🚧

**⚠️ En cours de développement et de test**

Cette classe permet l'affichage visuel de l'échiquier avec :

- Utilisation des caractères Unicode pour les pièces d'échecs
- Affichage des positions initiales
- Gestion de l'état du plateau

## 🚀 Utilisation

### Prérequis

- PHP 8.0 ou supérieur
- Terminal ou navigateur web

### Exécution

1. Clonez ou téléchargez le projet
2. Exécutez le fichier principal :

```bash
php index.php
```

### Exemple de code

```php
<?php
// Autoloading des classes
spl_autoload_register(function ($classe) {
    include "classes/" . $classe . ".class.php";
});

// Création d'un cavalier blanc
$cavalier = new Cavalier(3, 5, PieceEchecs::BLANCHE);

// Test de mouvement
if ($cavalier->peutAllerA(5, 6)) {
    echo "Le cavalier peut aller en (5, 6)";
} else {
    echo "Mouvement invalide";
}

// Affichage de l'échiquier
$echiquier = new Echiquier();
$echiquier->afficherEchiquier();
```

## 🧪 Tests disponibles

Le fichier [index.php](index.php) contient différents tests (actuellement commentés) pour :

- Tester les mouvements de chaque pièce
- Vérifier la logique des déplacements
- Afficher l'échiquier visuel

## ⚡ Fonctionnalités implémentées

- ✅ Classe abstraite avec héritage
- ✅ Gestion des positions sur l'échiquier (8x8)
- ✅ Logique de mouvement pour toutes les pièces classiques
- ✅ Validation des mouvements dans les limites de l'échiquier
- ✅ Gestion des couleurs (blanches/noires)
- ✅ Autoloading automatique des classes
- ✅ Gestion d'exceptions personnalisées
- 🚧 Affichage visuel de l'échiquier (en développement)

## 🎓 Concepts POO utilisés

- **Classes abstraites** : `PieceEchecs` comme modèle de base
- **Héritage** : Chaque pièce hérite de `PieceEchecs`
- **Encapsulation** : Propriétés privées avec getters/setters
- **Polymorphisme** : Méthode `peutAllerA()` spécifique à chaque pièce
- **Exceptions personnalisées** : `PieceEchecsExceptions`
- **Autoloading** : Chargement automatique des classes

## 🛠️ Développement futur

- [ ] Finaliser et tester la classe `Echiquier`
- [ ] Ajouter la détection des échecs et mats
- [ ] Implémenter les règles spéciales (roque, en passant)
- [ ] Ajouter une interface graphique
- [ ] Créer un système de partie complète

## 👨‍🎓 Contexte de formation

Projet réalisé dans le cadre de la formation développeur web/web mobile à l'AFPA, module PHP et programmation orientée objet.

---

Projet réalisé dans le cadre de la formation AFPA - Programmation Orientée Objet PHP
