<?php

namespace JJArroyo\LaravelIlovepdf\Facades;

use Illuminate\Support\Facades\Facade;

class Ilovepdf extends Facade 
{

    protected static function getFacadeAccessor() 
    { 
        return 'ilovepdf'; 
    }

}