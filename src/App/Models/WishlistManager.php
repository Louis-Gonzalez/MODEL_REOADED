<?php

// on déclare l'espace de nom
namespace App\Models;

// On appelle les class nécessaires
use App\Models\Post;


// On indique la BDD
use App\Services\Database;

// on déclare la class UserManager
class WishlistManager extends AbstractManager
{
    public function __construct(){
        
        // On indique la base de données
        self::$db = new DataBase();
        // On indique le nom de la table
        self::$tableName = 'wishlist';
        // On indique les classes dont on a besoin
        self::$obj = new Wishlist();
    }
}
?>