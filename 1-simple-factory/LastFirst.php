<?php

namespace SimpleFactory;

class LastFirst extends Namer
{
    public function __construct(string $name)
    {
        $this->lName = $name;
    }
}