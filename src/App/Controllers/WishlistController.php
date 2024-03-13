<?php

// On délcare l'espace de nom
namespace App\Controllers;

// On appelle les classes
use App\Models\WishlistManager;

// On délcare la class WishlistController
class WishlistController extends AbstractController
{
    public function index()
    {
        $manager = new WishlistManager();

        $wishs = $manager->query("  SELECT * FROM post


                                            -- INNER JOIN contact
                                            -- on post.user_id = contact.user_id
                                            -- inner join comment
                                            -- on post.id = comment.post_id
                                            -- inner join user
                                            -- on contact.user_id = user.id3
                                            ", []);    
        var_dump($wishs);

        $template = './views/template_wishlist.phtml';
        $this->render($template, ['wishs' => $wishs]);
    }

    public function addwishlist(){

        $manager = new WishlistManager();
        $wishs = $manager->query(
            "INSERT INTO wishlist " 
        );
    }
    
}

