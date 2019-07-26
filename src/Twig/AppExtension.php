<?php

namespace App\Twig;

use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('slugify', [$this, 'slugify']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('slugify', [$this, 'slugify']),
        ];
    }

    public function slugify(string $val): string
    {
        
        $str = preg_replace("/ +/", "-", trim($val));
        $str = preg_replace( "/[^A-Za-z0-9-]/", '', $str );
        $str = mb_strtolower( $str, 'UTF-8' );
        
        return $str;
        
    }
}