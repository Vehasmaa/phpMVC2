<?php

// This is helper class to handle template recursively so all field names get content they need
// or if content not available they are set to empty...

class TemplateEngine{
    
    private $Buffer = "";
    private $FunctionArray = "";

    // Set what template file we use as base
    public function SetTemplate($name){

    }

    // Set fields specific to this view only
    public function SetField($name, $content){

    }

    // Access to general functions
    // or would it be more better to give array of general functions in Render()?
    public function SetGeneralFunctions($FuncArray){

    }

    // Go over template and call general functions if not found in preset list
    public function Render(){

    }
    public function ShowView(){
        return $this->Buffer;
    }
}

?>