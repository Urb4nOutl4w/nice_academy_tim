<?php
declare(strict_types=1);

namespace NiceshopsDev\NiceAcademy\Tests\Basic;

class NiceClass implements \Countable {
    
    
    /**
     * @return string
     */
    protected function getString(): string
    {
        return "be ";
    }
    
    
    /**
     * @return string
     */
    public function result(): string
    {
        return trim($this->getString()) . " nice";
    }

    /**
     * @return int
     */
    public function count() {
        //return 1;
        $result = $this->result(); 
        return strlen($result);
    }
}