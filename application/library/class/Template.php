<?php

// This is helper class to handle template recursively so all field names get content they need
// or if content not available they are set to empty...

class TemplateEngine{
    
    private $Buffer = "";
    private $Fields = array();

    // Set what template file we use as base
    public function SetTemplate($name){

    }

    // Set fields specific to this view only
    public function SetField($name, $content){
        $this->Fields[$name] = $content;
    }

    // Go over template and call general functions if not found in preset list
    public function Render(){

    }

    public function ShowView(){
        return $this->Buffer;
    }
}

?>