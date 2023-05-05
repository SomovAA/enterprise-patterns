<?php

namespace SimpleFactory;

use Exception;

class NameFactory
{
    public function __construct()
    {
    }

    public function getName(string $name): Namer
    {
        if ($name === 'first') {
            return new FirstFirst('first');
        }

        if ($name === 'last') {
            return new LastFirst('last');
        }

        throw new Exception('Not found name');
    }
}