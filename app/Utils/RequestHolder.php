<?php

namespace App\Utils;
use Symfony\Component\HttpFoundation\Request;

class RequestHolder extends Singleton {

    protected $request;
    
    public function __construct() {
        $this->request = Request::createFromGlobals();
    }
    
    public function getRequest() {
        return $this->request;
    }
    
}

?>