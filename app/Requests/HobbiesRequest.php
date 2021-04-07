<?php

class HobbiesRequest extends Request
{
    public function validation(object $post) : object
    {
        $data = [];
                                        // START VALIDATION
        if(isset($post->id) && $post->id != 0) {
            // START ID VALIDATION
            if (!$data['id'] = $this->id((int) $post->id))
                return header("location:" . $_SERVER['HTTP_REFERER']);
            // END ID VALIDATION
        }

        if(isset($post->user_id) && $post->user_id != 0) {
            // START ID VALIDATION
            if (!$data['user_id'] = $this->id((int) $post->user_id))
                return header("location:" . $_SERVER['HTTP_REFERER']);
            // END ID VALIDATION
        }

        // START SKILL NAME VALIDATION
        if (!$data['hobby'] = $this->hobby((string) $post->hobby))
            return header("location:" . $_SERVER['HTTP_REFERER']);
        // END SKILL NAME VALIDATION

        // START SKILL LEVEL VALIDATION
        if (!$data['icon'] = $this->icon((string) $post->icon))
            return header("location:" . $_SERVER['HTTP_REFERER']);
        // END SKILL LEVEL VALIDATION
                                        // End VALIDATION
        return (object) $data;
    }

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

}