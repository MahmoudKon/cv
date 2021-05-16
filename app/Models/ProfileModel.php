<?php

class ProfileModel extends Model
{

    // SELECT ALL TABLE'S DATA ABOUT USER BY USER ID AND CALL THIS METHOD [ SelectDataTableByUserID(TABLE NAME, USER ID) ]
    public function allUserInfo(int $id)
    {
        // SELECT USER BY ID
        $this->db->query("SELECT * FROM users WHERE id = :id");
        $this->db->bind(':id', $id);

        // FETCH ALL DATA OF USER
        $data['user'] = $this->db->single();
        // IF NOT HAVE USER RETURN FALSE
        if (!$data['user']) {
            return false;
        }

        $data['general'] = $this->SelectDataTableByUserID('general', $id);
        $data['skills'] = $this->SelectDataTableByUserID('skills', $id);
        $data['hobbies'] = $this->SelectDataTableByUserID('hobbies', $id);
        $data['education'] = $this->SelectDataTableByUserID('education', $id);
        $data['experience'] = $this->SelectDataTableByUserID('experience', $id);
        return (object) $data;
    }

    // SELECT ALL DATA BY TABLE NAME AND USER ID
    public function SelectDataTableByUserID($table, $user_id)
    {
        $this->db->query("SELECT * FROM " . $table . " WHERE user_id = :user_id");
        $this->db->bind(':user_id', $user_id);
        if ($table == 'general') {
            $rows = $this->db->single();
        } else {
            $rows =  $this->db->resultSet();
        }

        if (!empty($rows)) {
            return (object) $rows;
        }
    }

    //////////// END TO SELECT THE EACH TABLE ////////////



    public function updateUser(object $data)
    {
        // SELECT USER BY ID
        // $this->update((object) $data->users);
        if ($this->update('hobbies', (object) $data->hobbies, $data->users['id'])) {
            dd("done");
        } else {
            dd("noe");
        }
    }


    // SAVE ANY UPDATING DATA FROM ANY TABLE
    public function update(string $table, object $data, int $user_id = null)
    {
        // SET THE PART 1 OF THE QUERY AND THE TABLE NAME WILL COME FROM CONTROLLER
        $query = 'UPDATE ' . $table . ' SET ';
        // ARRAY HAVE ALL FIELDS THAT WILL MAKE BIND
        $binding = [];

        // LOOPING ON OBJECT TO SET THE PART 2 OF THE QUERY [ COL NAME ... ] AND THE BINDING ARRAY
        foreach (reset($data) as $key => $value) :
            if ($key !== 'id')
                $query .= $key . ' = :' . $key . ', ';
        endforeach;

        $query = rtrim($query, ', ') . ' WHERE id = :id';

        // TO CHECK IF THIS TABLE WANT USER ID OR NOT
        if ($user_id !== null) {
            $query .= ' AND user_id = :user_id';
            $binding[':user_id'] = $user_id;
        }

        foreach ($data as $row) {
            foreach ($row as $key => $value) :
                $binding[':' . $key] = $value;
            endforeach;

            // PREPAR THE QUERY
            $this->db->query($query);
            // LOOPING ON THE ARRAY TO BIND HIS INDEX
            foreach ($binding as $key => $value) :
                $test = $key . '  ' . $value .   '  /  ';
                $this->db->bind($key, $value);

                if (!$this->db->execute())
                    return false;
            endforeach;
        }
        return true;
    }
}
