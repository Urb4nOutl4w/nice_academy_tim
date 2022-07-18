<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Basic;


class MyNiceClass extends NiceClass
{
    
    
    /**
     * @return string
     */
    protected function getString(): string
    {
        return "allways be ";
    }
}