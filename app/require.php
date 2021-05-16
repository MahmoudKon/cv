<?php
session_start();
// PATHES OF FOLDERS
define('DS',            DIRECTORY_SEPARATOR);       //  DIRECTORY SEPARATOR   [ / OR \]
define('ROOT',          dirname(__DIR__) . DS);     //  Folder ROOT Path With Project File
define('HOST',          realpath(ROOT));            //  Folder ROOT Before The Project File
define('APP',           ROOT . 'app' . DS);         //  Folder App Path
define('CONFIG',        APP . 'Config' . DS);       //  Folder CONFIG Path
define('CONTROLLERS',   APP . 'Controllers' . DS);  //  Folder CONTROLLERS Path
define('LIBRARIES',     APP . 'Libraries' . DS);    //  Folder LIBRARIES Path
define('MODELS',        APP . 'Models' . DS);       //  Folder MODELS Path
define('REQUESTS',      APP . 'Requests' . DS);     //  Folder Requests Path
define('VIEWS',         APP . 'Views' . DS);        //  Folder VIEWS Path
define('PUBLIC_PATH',  ROOT . 'public' . DS);       //  Folder VIEWS Path
define('SITENAME',            'CV');                //  SITE NAME
$folders = (explode(DS, HOST));                     //  To Transform The ROOT Path To ARRAY
define('PROJECTNAME',    array_pop($folders));      //  Project Folder NAME

// Request The Files From The Libararies Folder
require_once(LIBRARIES . 'Core.php');         // CORE FILE
require_once(LIBRARIES . 'Controller.php');   // CONTROLLER FILE
require_once(LIBRARIES . 'Model.php');        // MODEL FILE
require_once(LIBRARIES . 'Request.php');      // Request FILE
require_once(LIBRARIES . 'Database.php');     // DATABASE FILE
require_once(LIBRARIES . 'Input.php');        // INPUT FILE
require_once(LIBRARIES . 'Helper.php');       // HELPER FILE
// Request The Config File From The Config Folder
require_once(CONFIG . 'config.php');          // CONFIG FILE

// Instantiate Core Class
$init = new Core();
