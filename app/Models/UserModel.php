<?php

class UserModel extends Model
{

    //////////// sTART OF SAVE DATA INSIDE ALL TABLES ////////////
    // CALL ALL METHODS THAT SAVE ALL USERS DATA IN ALL TABLES
    public function create($data)
    {
        $id = $this->insertUser($data->username, $data->password, $data->email, $data->image);
        if ($id) {
            if (!$this->insertGeneral($id, $data)) {
                return false;
            }
            if ($this->insertSkills($id, (object) $data->skills)) {
                return false;
            }
            if ($this->insertHobbies($id, (object) $data->hobbies)) {
                return false;
            }
            if ($this->insertEducation($id, (object) $data->education)) {
                return false;
            }
            if ($this->insertExperience($id, (object) $data->experience)) {
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    // INSERT USER DATA ON USERS TABLE
    public function insertUser($username, $password, $email, $image)
    {
        $this->db->query('INSERT INTO users (username, email, password, image) VALUES(:username, :email, :password, :image)');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(":image", $image);
        if ($this->db->execute())
            return $this->last_insert_id('users');
        else
            return false;
    }

    // INSERT USER DATA ON GENERAL TABLE
    public function insertGeneral($user_id, $data)
    {
        dd($data->phone);
        $this->db->query('INSERT INTO general (user_id, website, full_name, birthday, job, gender, phone, about, awards, address)
                            VALUES(:user_id, :website, :full_name, :birthday, :job, :gender, :phone, :about, :awards, :address)');
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':website', $data->website);
        $this->db->bind(':full_name', $data->full_name);
        $this->db->bind(':birthday', $data->birthday);
        $this->db->bind(':job', $data->job);
        $this->db->bind(':gender', $data->gender);
        $this->db->bind(':phone', $data->phone);
        $this->db->bind(':about', $data->about);
        $this->db->bind(':awards', $data->awards);
        $this->db->bind(':address', $data->address);
        if ($this->db->execute())
            return true;
        else
            return false;
    }

    // INSERT USER'S SKILLS ON SKILLS TABLE
    public function insertSkills($user_id, object $skills)
    {
        foreach ($skills as $skill) :
            $this->db->query('INSERT INTO skills (user_id, skill, level) VALUES(:user_id, :skill, :level)');
            $this->db->bind(':user_id', $user_id);
            $this->db->bind(':skill', $skill['skill']);
            $this->db->bind(':level', $skill['level']);
            if (!$this->db->execute())
                return false;
        endforeach;
    }

    // INSERT USER'S HOBBIES ON HOBBIES TABLE
    public function insertHobbies($user_id, object $hobbies)
    {
        foreach ($hobbies as $hobby) :
            $this->db->query('INSERT INTO hobbies (user_id, hobby, icon) VALUES(:user_id, :hobby, :icon)');
            $this->db->bind(':user_id', $user_id);
            $this->db->bind(':hobby', $hobby['hobby']);
            $this->db->bind(':icon', $hobby['icon']);
            if (!$this->db->execute())
                return false;
        endforeach;
    }

    // INSERT USER'S EDUCATION ON EDUCATION TABLE
    public function insertEducation($user_id, object $education)
    {

        foreach ($education as $edu) :
            $this->db->query('INSERT INTO education (user_id, degree, place, description, start_date, end_date)
                                VALUES(:user_id, :degree, :place, :description, :start_date, :end_date)');
            $this->db->bind(':user_id', $user_id);
            $this->db->bind(':degree', $edu['degree']);
            $this->db->bind(':place', $edu['place']);
            $this->db->bind(':description', $edu['description']);
            $this->db->bind(':start_date', date('Y-m-d', strtotime($edu['start_date'])));
            $this->db->bind(':end_date', date('Y-m-d', strtotime($edu['end_date'])));
            if (!$this->db->execute())
                return false;
        endforeach;
    }

    // INSERT USER'S EXPERIENCE ON EDUCATION TABLE
    public function insertExperience($user_id, object $experience)
    {
        foreach ($experience as $exp) :
            $this->db->query('INSERT INTO experience (user_id, degree, place, description, start_date, end_date)
                                VALUES(:user_id, :degree, :place, :description, :start_date, :end_date)');
            $this->db->bind(':user_id', $user_id);
            $this->db->bind(':degree', $exp['degree']);
            $this->db->bind(':place', $exp['place']);
            $this->db->bind(':description', $exp['description']);
            $this->db->bind(':start_date', $exp['start_date']);
            $this->db->bind(':end_date', $exp['end_date']);
            if (!$this->db->execute())
                return false;
        endforeach;
    }

    // RETURN THE ID OF LAST RECOURD IN ANY TABLE BY TABLE NAME [ RETURN THE ONLY ID ]
    public function last_insert_id(string $table)
    {
        $this->db->query("SELECT id FROM " . $table . " ORDER BY id DESC LIMIT 1");
        return (int) $this->db->single()->id;
    }
    //////////// END OF SAVE DATA INSIDE ALL TABLES ////////////

    // DELETE ANY DATA IN ANY TABLE BY TABLE NAME , ID
    public function delete(string $table, int $id)
    {
        $this->db->query("DELETE FROM " . $table . " WHERE id = :id");
        $this->db->bind(':id', $id);

        if ($this->db->execute() == true) {
            if (auth()->id == $id) {
                // DESTROY THE SESSION
                session_destroy();
                // RETURN THE REDIRECT TO LOGIN PAGE
                return 'dashboard/login';
            } else {
                // WHEN THE USER DELETED NOT THE AUTH USER WILL REDIRECT TO GENERAL PAGE
                return 'dashboard/' . $table;
            }
        } else {
            return false;
        }
    }
}
