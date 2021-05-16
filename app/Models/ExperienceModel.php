<?php

class ExperienceModel extends Model
{

    // TO SELECT ONE ROW BY ID IN ANY TABLE BY TABLE NAME
    public function whereUserID(string $table, int $user_id)
    {
        $this->db->query("SELECT * FROM experience WHERE user_id = :user_id");
        $this->db->bind(":user_id", $user_id);
        $result = $this->db->resultSet();

        // dd($result);
        if($result) { return $result; }
        else { return false; }
    }

    // SAVE ANY UPDATING DATA FROM ANY TABLE
    public function InsertExperience(object $data)
    {
        // SET THE PART 1 OF THE QUERY AND THE TABLE NAME WILL COME FROM CONTROLLER 
        $query = 'INSERT INTO experience
                            (start_date, end_date, degree, place, description, user_id) 
                    VALUES (:start_date, :end_date, :degree, :place, :description, :user_id)';
        // ARRAY HAVE ALL FIELDS THAT WILL MAKE BIND

        // PREPAR THE QUERY
        $this->db->query($query);

        // LOOPING ON THE ARRAY TO BIND HIS INDEX
        foreach($data as $row) {
            foreach($row as $key => $value) {
                $this->db->bind(':' . $key, $value);
            }
            // EXECUTE THE QUERY AND RETURN TRUE IF SUCCESS OR FALSE IF HAS ERROR
            if(!$this->db->execute())
                return false;
        }
        return true;
    }

    // SAVE ANY UPDATING DATA FROM ANY TABLE
    public function UpdateExperience(object $data)
    {
        // SET THE PART 1 OF THE QUERY AND THE TABLE NAME WILL COME FROM CONTROLLER 
        $query = 'UPDATE experience SET start_date = :start_date,
                        end_date = :end_date, degree = :degree,
                        place = :place, description = :description
                        WHERE id = :id AND user_id = :user_id';
        // PREPAR THE QUERY
        $this->db->query($query);

        foreach($data as $row) {
            // LOOPING ON THE ARRAY TO BIND HIS INDEX
            foreach($row as $key => $value) :
                $this->db->bind(':' . $key, $value);
            endforeach;

            // EXECUTE THE QUERY AND RETURN TRUE IF SUCCESS OR FALSE IF HAS ERROR
            if(!$this->db->execute())
                return false;
        } // END OF FOREACH
        return true;
    } // END OF UPDATE HOBBIES

    // TO DELETE ANY RECOURD HIS ID FROM ANY TABLE BY TABLE NAME
    public function delete($table, $id)
    {
        $this->db->query('DELETE FROM experience WHERE id = :id');
        $this->db->bind(':id', $id);

        if($this->db->execute())
            return true;
        else
            return false;
    }

}