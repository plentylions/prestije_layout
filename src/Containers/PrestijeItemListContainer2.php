<?php

namespace Prestije\Containers;

use Plenty\Plugin\Templates\Twig;

class PrestijeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Prestije::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}