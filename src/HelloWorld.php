<?php

namespace PosledniSobota;

class HelloWorld
{

    /**
     * @var string
     */
    private $name;

    /**
     * HelloWorld constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function sayHello()
    {
        return 'Hello ' . $this->name;
    }

}
