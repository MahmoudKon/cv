<?php

class SkillsRequest extends Request
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
        if (!$data['skill'] = $this->skill((string) $post->skill))
            return header("location:" . $_SERVER['HTTP_REFERER']);
        // END SKILL NAME VALIDATION

        // START SKILL LEVEL VALIDATION
        if (!$data['level'] = $this->level((int) $post->level))
            return header("location:" . $_SERVER['HTTP_REFERER']);
        // END SKILL LEVEL VALIDATION
                                        // End VALIDATION
        return (object) $data;
    }
}