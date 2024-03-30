<?php

# After this default paths should be set for rest of applications
require_once "./application/config/config.php";

# Import class definitions
require_once $PathClass."Database.php";
require_once $PathClass."Engine.php";
require_once $PathClass."Template.php";
require_once $PathClass."TemplateEngine.php";
//require_once "./application/library/class/database.php";

$DbObject = new Database();

$PathFilter = new Filter("path");

$Template = new TemplateEngine();

$General = new General();

// Dependency injection
$Engine = new Engine($DbObject,$PathFilter,$Template,$General);
?>