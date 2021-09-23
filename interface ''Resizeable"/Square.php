<?php

class Square extends Rectangle implements Resizeable
{
    public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function resize()
    {
        return parent::resize();

    }
}