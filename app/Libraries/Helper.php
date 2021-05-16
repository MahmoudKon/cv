<?php

function avatarPath($avatar)
{
    return assets('uploads/' . $avatar);
}

function assets($path)
{
    return '/' . PROJECTNAME . '/public/assets/' . $path;
}

function segment()
{
    $url = explode("/", trim($_SERVER['REQUEST_URI'], '/'));
    array_shift($url);
    return $url;
}

function activeUrl($link)
{
    //  index[0] => Dashboard ,  index [1] => Controller [The Important]
    $url = segment();

    // Check If The URL Is Have The Index Of Controller AND Equal The Name Of Link Tage The Retuen Class active
    if (isset($url[1]) && $url[1] == $link) { return 'active'; }

    if( (isset($url[1]) && $url[1] == 'home' && $link == 'dashboard') || (!isset($url[1]) && $link == 'dashboard') ) { return 'active'; }
}

function URL($url)
{
    // To Return This link => / Project File / $url
    return '/' . PROJECTNAME . '/' . $url;
}

function auth()
{
    if(isset($_SESSION['user'])) :
        $user = $_SESSION['user'];
        return (object) $user;
    endif;
}

function msg(string $type = null, string $message = null)
{
    if($type == null && $message == null)
    {
        return $_SESSION['msg'];
    }else{
        $_SESSION['msg'] = ['type' => $type, 'message' => $message]; 
    }
}

function dd($var)
{
    echo "<pre>";
    die("<pre>" . var_dump($var) . "</pre>");
    echo"</pre>";
}
