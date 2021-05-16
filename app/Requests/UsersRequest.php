<?php

// strip_tags($username) => TO REMOVE ANY TAGS
// htmlspecialchars($username) => TO CANGE THE TAGS TO STRING

class UsersRequest extends Request
{
    // START USER NAME VALIDATION
    public function username(string $username) :string
    {
        if(!empty($username)) :

            $username = str_replace(' ', '', trim(strip_tags($username)));
            $username = filter_var($username, FILTER_SANITIZE_STRING);

            if ($username) { return (string) $username; }
            else { msg('danger', 'This username cannot be used');  return false; }

        else :
            msg('danger', 'The user name must not be empty');  return false;
        endif;
    }
    // END USER NAME VALIDATION

    // START EMAIL VALIDATION
    public function email(string $email) :string
    {
        if(!empty($email)) :

            $email = trim(strip_tags($email));
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            if ($email) { return (string) $email; }
            else { msg('danger', 'Please use a valid email');  return false; }

        else :
            msg('danger', 'The email must not be empty');  return false;
        endif;
    }
    // END EMAIL VALIDATION

    // START PASSWORD VALIDATION
    public function password(string $password) :string
    {
        if(!empty($password)) :
            $password = trim(htmlspecialchars($password));
            $password = strlen($password) < 2 ? false : $password;

            if ($password) { return sha1($password); }
            else { msg('danger', 'The password must be more than 2 characters');  return false; }

        else :
            msg('danger', 'The password must not be empty');  return false;
        endif;
    }
    // END PASSWORD VALIDATION

    // START PASSWORD VALIDATION
    public function image(array $image)
    {
        // CREATE THE UPLOADED PATH
        $path = assets('upload');
        // SET ALL EXTENSIONS OF IMAGES
        $extensions = ['jpg', 'jpeg', 'png', 'gif'];
        // GET THE EXTENSION ON UPLOADED IMAGE
        $ex = pathinfo(strtolower($image['name']), PATHINFO_EXTENSION);

        // CHECK IF THE EXTENSION OF THE UPLOADED IMAEG IS CORRECT
        if(!in_array($ex, $extensions))
            { msg('danger', 'Please upload a valid photo [ jpg, jpeg, png, gif ]');  return false; }

        // CHECK IF THE IMAGE SIZE LARGER THAN 500K
        if($image['size'] > 500000)
            { msg('danger', 'Your image is too larg');  return false; }

        // CREATE NEW NAME
        $image_name = time().uniqid(rand()) . '.' . $ex;

        if (move_uploaded_file($image['tmp_name'], 'assets/uploads/' . $image_name))
            return $image_name;
        else
            return false;
    }
    // END PASSWORD VALIDATION
}