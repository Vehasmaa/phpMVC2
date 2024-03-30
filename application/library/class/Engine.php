<?php

class Engine{
    private $Database = "";
    private $PathFilter = "";
    private $Template = "";

    public function __construct($DbObject,$PathFilter,$Template){
        $this->Database = $DbObject;

        $this->PathFilter = $PathFilter;

        $this->Template = $Template;

    }

    public function Run(){

        // Filter path and variables
        $this->PathFilter();
        
        // Check correct controller existing?

        // Check it has requested function?

        // Execute controller and its function
    }
}

?>