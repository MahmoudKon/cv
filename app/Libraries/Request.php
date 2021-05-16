<?php

class Request
{
    // START ID VALIDATION
    public function id($id) :int
    {
        if(!empty($id)) :

            $id = trim(strip_tags($id));

            if (is_numeric($id)) { return (int) $id; }
            else { msg('danger', 'Something is wrong');  return false; }

        else :
            msg('danger', 'Something is wrong');  return false;
        endif;
    }
    // END ID VALIDATION

//////////////////////////// START USERS TABLE //////////////////////
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
//////////////////////////// END USERS TABLE //////////////////////

//////////////////////////// START GENERAL TABLE //////////////////////

    // START WEBSITE VALIDATION
    public function website(string $website) :string
    {
        if(!empty($website)) :

            $website =  trim(strip_tags($website));
            $website = filter_var($website, FILTER_VALIDATE_URL);
            $website = filter_var($website, FILTER_SANITIZE_URL);

            if (strlen($website) < 5 || is_numeric($website) || !$website) 
                { msg('danger', 'This website must be a valid url');  return false; }

            return (string) $website;

        else :
            msg('danger', 'The website must not be empty');  return false;
        endif;
    }
    // END WEBSITE VALIDATION

    // START FULL NAME VALIDATION
    public function full_name(string $fullname) :string
    {
        if(!empty($fullname)) :

            $fullname =  trim(strip_tags($fullname));

            if (strlen($fullname) < 10 || is_numeric($fullname) || !$fullname) 
                { msg('danger', 'This full name must be string more than 10 letters');  return false; }

            return (string) $fullname;

        else :
            msg('danger', 'The full name must not be empty');  return false;
        endif;
    }
    // END FULL NAME VALIDATION

    // START JOB VALIDATION
    public function job(string $job) :string
    {
        if(!empty($job)) :

            $job =  trim(strip_tags($job));

            if (strlen($job) < 5 || is_numeric($job) || !$job) 
                { msg('danger', 'This job must be string more than 5 letters');  return false; }

            return (string) $job;

        else :
            msg('danger', 'The job must not be empty');  return false;
        endif;
    }
    // END JOB VALIDATION

    // START ADDRESS VALIDATION
    public function address(string $address) :string
    {
        if(!empty($address)) :

            $address =  trim(strip_tags($address));

            if (strlen($address) < 10 || is_numeric($address) || !$address) 
                { msg('danger', 'This address must be string more than 5  10 letters');  return false; }

            return (string) $address;

        else :
            msg('danger', 'The address must not be empty');  return false;
        endif;
    }
    // END ADDRESS VALIDATIO

    // START PHONE VALIDATION
    public function phone($phone)
    {
        if(!empty($phone)) :

            $phone =  trim(strip_tags($phone));

            if (is_int($phone) || !$phone) 
                { msg('danger', 'This phone must be number = 12 letters');  return false; }

                return $phone;
        else :
            msg('danger', 'The phone must not be empty');  return false;
        endif;
    }
    // END PHONE VALIDATIO

    // START ABOUT VALIDATION
    public function about(string $about) :string
    {
        if(!empty($about)) :

            $about =  trim(htmlspecialchars($about));

            if (strlen($about) < 20 || is_numeric($about) || !$about) 
                { msg('danger', 'Please write at least 20 letters about yourself');  return false; }

            return (string) $about;

        else :
            msg('danger', 'The about must not be empty');  return false;
        endif;
    }
    // END ABOUT VALIDATION

    // START AWARDS VALIDATION
    public function awards(string $awards) :string
    {
        if(!empty($awards)) :

            $awards =  trim(htmlspecialchars($awards));

            if (strlen($awards) < 20 || is_numeric($awards) || !$awards) 
                { msg('danger', 'Please write about your awards in at least 20 letters');  return false; }

            return (string) $awards;

        else :
            msg('danger', 'The awards must not be empty');  return false;
        endif;
    }
    // END AWARDS VALIDATION

//////////////////////////// END GENERAL TABLE //////////////////////

//////////////////////////// START SKILLS TABLE //////////////////////

    // START SKILL NAME VALIDATION
    public function skill(string $skill) :string
    {
        if(!empty($skill)) :

            $skill =  trim(strip_tags($skill));
            $skill = filter_var($skill, FILTER_SANITIZE_STRING);

            if (strlen($skill) < 5 || is_numeric($skill) || !$skill) 
                { msg('danger', 'This field must be string more than 5 characters'); return false; }

            return $skill;

        else :
            msg('danger', 'The skill name must not be empty');  return false;
        endif;
    }
    // END SKILL NAME VALIDATION

    // START SKILL LEVEL VALIDATION
    public function level(int $level) :int
    {
        if(!empty($level)) :
            if(!is_numeric($level) || $level > 5 || $level < 1)
                { msg('danger', 'Please this field must be numbers only from 1 to 5');  return false; }

            $level = trim(strip_tags($level));
            return (int) $level; 
        else :
            msg('danger', 'The level of skill must not be empty');  return false;
        endif;
    }
    // END SKILL LEVEL VALIDATION

//////////////////////////// END SKILLS TABLE //////////////////////

//////////////////////////// START HOBBY TABLE //////////////////////

    // START HOBBY NAME VALIDATION
    public function hobby(string $hobby) :string
    {
        if(!empty($hobby)) :

            $hobby =  trim(strip_tags($hobby));
            $hobby = filter_var($hobby, FILTER_SANITIZE_STRING);

            if (strlen($hobby) < 5 || is_numeric($hobby) || !$hobby) 
                { msg('danger', 'This field must be string more than 5 characters');  return false; }

            return (string) $hobby;

        else :
            msg('danger', 'The hobby name must not be empty');  return false;
        endif;
    }
    // END HOBBY NAME VALIDATION

    // START ICON LEVEL VALIDATION
    public function icon(string $icon) :string
    {
        if(!empty($icon)) :

            $icon = trim(strip_tags($icon));
            $icon = filter_var($icon, FILTER_SANITIZE_STRING);

            if(is_numeric($icon) || strlen($icon) > 20 || strlen($icon) < 3 || !$icon)
                { msg('danger', 'Please enter a valid icon name');  return false; }

            return (string) $icon;

        else :
            msg('danger', 'The icon of hobby must not be empty');  return false;
        endif;
    }
    // END SKILL ICON VALIDATION

//////////////////////////// END HOBBY TABLE //////////////////////


//////////////////////////// START EDUCATION & EXPERIENCE TABLE //////////////////////

    // START DEGREE NAME VALIDATION
    public function degree(string $degree) :string
    {
        if(!empty($degree)) :

            $degree =  trim(strip_tags($degree));
            $degree = filter_var($degree, FILTER_SANITIZE_STRING);

            if (strlen($degree) < 5 || is_numeric($degree) || !$degree) 
                { msg('danger', 'This degree must be string more than 5 characters');  return false; }

            return (string) $degree;

        else :
            msg('danger', 'The degree must not be empty');  return false;
        endif;
    }
    // END DEGREE NAME VALIDATION

    // START PLACE NAME VALIDATION
    public function place(string $place) :string
    {
        if(!empty($place)) :

            $place =  trim(strip_tags($place));
            $place = filter_var($place, FILTER_SANITIZE_STRING);

            if (strlen($place) < 5 || is_numeric($place) || !$place) 
                { msg('danger', 'The University must be string more than 5 characters');  return false; }

            return (string) $place;

        else :
            msg('danger', 'The University must not be empty');  return false;
        endif;
    }
    // END PLACE NAME VALIDATION

    // START DESCRIPTION NAME VALIDATION
    public function description(string $description) :string
    {
        if(!empty($description)) :

            $description =  trim(strip_tags($description));
            $description = filter_var($description, FILTER_SANITIZE_STRING);

            if (strlen($description) < 10 || is_numeric($description) || !$description) 
                { msg('danger', 'The description must be string more than 10 characters');  return false; }

            return (string) $description;

        else :
            msg('danger', 'The description must not be empty');  return false;
        endif;
    }
    // END DESCRIPTION NAME VALIDATION

//////////////////////////// END EDUCATION & EXPERIENCE TABLE //////////////////////

}