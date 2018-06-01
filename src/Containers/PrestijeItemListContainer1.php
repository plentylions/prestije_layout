<?php

namespace Prestije\Containers;

use Plenty\Plugin\Templates\Twig;

class PrestijeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Prestije::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}