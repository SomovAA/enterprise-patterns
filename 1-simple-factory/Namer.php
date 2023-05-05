<?php

namespace SimpleFactory;

class Namer
{
    protected string $frName;
    protected string $lName;

    public function getFrname(): string
    {
        return $this->frName;
    }

    public function getLname(): string
    {
        return $this->lName;
    }
}