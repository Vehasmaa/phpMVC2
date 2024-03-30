<?php

// Extend basic template engine with new functionality
// Like recursive parsing that allows more dynamic content
class TemplateEngine extends Template {

    // Do regular Render first to change fields in normal array
    // Do special functions run on rest to see if theres content from them
    // repeat until no field holders is available or are empty
    public function TemplateParse(){
        //$this->Buffer;
    }
    
    // Output processed template
    public function TemplatePrint(){
        return $this->Buffer;    
    }


}

?>