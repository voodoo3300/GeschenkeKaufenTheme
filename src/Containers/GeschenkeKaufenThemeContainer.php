<?php
 
namespace GeschenkeKaufenTheme\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class GeschenkeKaufenThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('GeschenkeKaufenTheme::content.GeschenkeKaufenTheme');
    }
}