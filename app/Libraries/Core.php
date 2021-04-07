<?php
/*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - /controller/method/params
   */
class Core
{
  protected $PageNotFound = 'PageNotFound';  // This The Default Controller When The Controller is not exists
  protected $controller = 'Home';  // This The Default Controller When no Controller on URL
  protected $method = 'index';  // This The Default Method When no Methodo URL
  protected $params = [];  // For The PARAMS
  protected $folder = 'Site/';  // For The PARAMS

  public function __construct()
  {
    $url = $this->getUrl();    //  Call The Function To Set URL

    if (isset($url[0])) :   // Check if is set the index [0] in URL
      if (file_exists(CONTROLLERS . $this->folder . ucwords($url[0]) . '.php')) // Check if The Controller Exists
      {
        $this->controller = ucwords($url[0]);   // If exists, set as Controller
        unset($url[0]);   // Unset [0] Index from URL

        require_once(CONTROLLERS . $this->folder . $this->controller . '.php'); // Require the Controller
        $this->controller = new $this->controller;        // Instantiate Controller Class

        if (isset($url[1])) :  //  Check if The Index 1 in URL is set
          // Check to see if method exists in controller
          if (method_exists($this->controller, strtolower($url[1]))) {
            $this->method = strtolower($url[1]);   // If Method exists, set as Method
            unset($url[1]);     // Unset [1] index
            $this->params = $url ? array_values($url) : [];    // Get params
          } else {
            // if The Method Not exitsts on the Controller , set it PageNotFound Method
            $this->method = $this->PageNotFound;
          }
        endif;  //  End This if(isset($url[1]))
      } else { // if The Controller NOT Exsists
        // When The Controller Not Exists, set PageNotFound
        $this->controller = $this->PageNotFound;
        require_once(CONTROLLERS . $this->controller . '.php');
        return new $this->controller();    //   return Object From The Controller [PageNotFound]
      }
    else :
      // When The URL is empty , Make The Controller is [Home], and Require it
      require_once(CONTROLLERS . $this->folder . $this->controller . '.php');
      $this->controller = new $this->controller;   // Instantiate controller class
    endif;

    // Call a callback with array of params
    call_user_func_array([$this->controller, $this->method], $this->params);
  } // End Construct Method

  public function getUrl()  //  Function To get the URL and Set it
  {
    if (isset($_GET['url'])) {
      $url = trim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      if ($url[0] == 'dashboard') {
        array_shift($url);
        $this->folder = 'Dashboard/';
      }
      return $url;
    }  // End Get URL Method
  }
}
