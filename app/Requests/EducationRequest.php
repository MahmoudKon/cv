<?php

class EducationRequest extends Request
{

    public function validation(object $post)
    {
        $data = [];
                                            // START VALIDATION
        // START DATE VALIDATION
        if(empty($post->start_date) || empty($post->end_date))
        {
            msg('danger', 'Please choose a date');
                return header("location:" . $_SERVER['HTTP_REFERER']);
        }

        if($post->end_date > date('Y-m-d') || $post->start_date > date('Y-m-d'))
        {
            msg('danger', 'Please choose a valid date');
            return header("location:" . $_SERVER['HTTP_REFERER']);
        }

        if($post->start_date >= $post->end_date)
        {
            msg('danger', 'start date must be less than end date');
                return header("location:" . $_SERVER['HTTP_REFERER']);
        }
        $data['end_date'] =  $post->end_date;
        $data['start_date'] =  $post->start_date;
        // END DATE VALIDATION

        if(isset($post->id) && $post->id !== '') {
            // START DEGREE VALIDATION
            if (!$data['id'] = $this->id((string) $post->id))
                    return header("location:" . $_SERVER['HTTP_REFERER']);
            // END DEGREE VALIDATION
        }

        // START DEGREE VALIDATION
        if (!$data['degree'] = $this->degree((string) $post->degree))
                return header("location:" . $_SERVER['HTTP_REFERER']);
        // END DEGREE VALIDATION

        // START PLACE VALIDATION
        if (!$data['place'] = $this->place((string) $post->place))
                return header("location:" . $_SERVER['HTTP_REFERER']);
        // END PLACE VALIDATION

        // START DESCRIPTION VALIDATION
        if (!$data['description'] = $this->description((string) $post->description))
                return header("location:" . $_SERVER['HTTP_REFERER']);
        // END DESCRIPTION VALIDATION
                                            // End VALIDATION
        // UPDATE THE DATA
        return $data;
    }

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

}