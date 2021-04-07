<?php

class GeneralModel extends Model
{
    public function issetPhone(object $data)
    {
        $id = isset($data->id) ? ' id <> :id AND ' : '';

        $query = 'SELECT phone FROM general WHERE ' . $id . ' phone = :phone';

        // MAKE QUERY AND BIND THE VALUES
        $this->db->query($query);

        $this->db->bind(':id', $data->id);
        $this->db->bind(':phone', $data->phone);

        // RUN THE QUERY
        $this->db->execute();
        // Check if Theis Field is already Existing
        if ($this->db->rowCount() > 0)
            return true;     // THEN WE HAVE THE SAME DATA TO ANOTHER RECORD
        else
            return false;   // NOT HAVE A SAME DATA
    }
}