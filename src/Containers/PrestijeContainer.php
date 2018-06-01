<?php

namespace Prestije\Containers;

use Plenty\Plugin\Templates\Twig;

class PrestijeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Prestije::Stylesheet');
    }
}