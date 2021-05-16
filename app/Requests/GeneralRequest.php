<?php

class GeneralRequest extends Request
{

    public function validation(object $data)
    {
                                       // START VALIDATION
        // START DATE VALIDATION
        if($data->birthday >= date('Y-m-d') || empty($data->birthday)) {
            msg('danger', 'Please choose a valid date');
            return false;
        }
        $general['birthday'] = $data->birthday;
        // END DATE VALIDATION

        // START DATE VALIDATION
        if(in_array($data->gender, ['male', 'female'])) {
            $general['gender'] = $data->gender;
        }else{
            msg('danger', 'Please choose a gender');
            return false;
        }
        // END DATE VALIDATION

        // START ID VALIDATION
        if(isset($data->id)) {
            if (!$general['id'] = $this->id((int) $data->id))
                return false;
        }
        // END ID VALIDATION

        // START WEBSITE VALIDATION
        if (!$general['website'] = $this->website((string) $data->website))
            return false;
        // END WEBSITE VALIDATION

        // START FULL NAME VALIDATION
        if (!$general['full_name'] = $this->full_name((string) $data->full_name))
            return false;
        // END FULL NAME VALIDATION

        // START JOB VALIDATION
        if (!$general['job'] = $this->job((string) $data->job))
            return false;
        // END JOB VALIDATION

        // START ADDRESS VALIDATION
        if (!$general['address'] = $this->address((string) $data->address))
            return false;
        // END ADDRESS VALIDATION

        // START PHONE VALIDATION
        if (!$general['phone'] = $this->phone($data->phone))
            return false;
        // END PHONE VALIDATION

        // START HOBBY ICON VALIDATION
        if (!$general['about'] = $this->about((string) $data->about))
            return false;
        // END HOBBY ICON VALIDATION

        // START HOBBY ICON VALIDATION
        if (!$general['awards'] = $this->awards((string) $data->awards))
            return false;
        // END HOBBY ICON VALIDATION
                                            // End VALIDATION
        return $general;
    }
// END OF VALIDATION METHOD


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
        if(!empty($about) && $about != '') :

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
}