<?php
namespace Kyjita\Laag;


use Illuminate\Support\Facades\Facade;

class LaagFacade extends Facade {


    protected static function getFacadeAccessor()
    {
        return 'laag';
    }

}