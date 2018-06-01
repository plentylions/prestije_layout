<?php

namespace Prestije\Containers;

use Plenty\Plugin\Templates\Twig;

class PrestijeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Prestije::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}