<?php

class HobbyModel extends Model
{

    // TO SELECT ONE ROW BY ID IN ANY TABLE BY TABLE NAME
    public function whereUserID(string $table, int $user_id)
    {
        $this->db->query("SELECT * FROM hobbies WHERE user_id = :user_id");
        $this->db->bind(":user_id", $user_id);
        if($table == 'general') { $result = $this->db->single(); }
        else { $result = $this->db->resultSet(); }

        // dd($result);
        if($result) { return $result; }
        else { return false; }
    }

    // SAVE ANY UPDATING DATA FROM ANY TABLE
    public function InsertHobbies(object $data)
    {
        // SET THE PART 1 OF THE QUERY AND THE TABLE NAME WILL COME FROM CONTROLLER 
        $query = 'INSERT INTO hobbies (hobby, icon, user_id) VALUES (:hobby, :icon, :user_id)';
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
    public function UpdateHobbies(object $data)
    {
         // SET THE PART 1 OF THE QUERY AND THE TABLE NAME WILL COME FROM CONTROLLER 
        $query = 'UPDATE hobbies SET hobby = :hobby, icon = :icon WHERE id = :id AND user_id = :user_id';
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
    public function delete(string $table, int $id)
    {
        $this->db->query('DELETE FROM hobbies WHERE id = :id');
        $this->db->bind(':id', $id);

        if($this->db->execute())
            return true;
        else
            return false;
    }

}