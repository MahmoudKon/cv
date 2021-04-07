<?php

class RegisterModel extends Model
{

    // RETURN TURE THEN THIS FIELD DATA IS ALREADY EXISTING / RETURN FALSE THEN THE FIELD DATA NOT EXISTING
    public function issetUserField(string $field, string $value)
    {
        // MAKE QUERY AND BIND THE VALUES
        $this->db->query('SELECT ' . $field . ' FROM users WHERE ' . $field . ' = :value');
        $this->db->bind(':value', $value);

        // RUN THE QUERY
        $this->db->execute();
        // Check if Theis Field is already Existing
        if ($this->db->rowCount() > 0)
            return true;     // THEN WE HAVE THE SAME DATA TO ANOTHER RECORD
        else
            return false;   // NOT HAVE A SAME DATA
    }
}
