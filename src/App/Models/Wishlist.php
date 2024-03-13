<?php 

// On déclare l'espace de nom
namespace App\Models;

// On utilise la class DataBase
use App\Services\DataBase;

// Déclaration de la class User
class Wishlist extends AbstractTable
{
    public ? int $post_id;
    private ? string $create_at=null;
}