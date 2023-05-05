<?php

namespace SimpleFactory;

class FirstFirst extends Namer
{
    public function __construct(string $name)
    {
        $this->frName = $name;
    }
}