<?php

class Model
{
    protected $db;

    public function __construct() {
        $this->db = new Database;
    }

    // SELECT ANY TABLE BY TABLE NAME
    public function select($table)
    {
        if($table != 'users') { $rowID = 'user_id'; } else { $rowID = 'id'; }

        $this->db->query("SELECT * FROM " . $table . " WHERE " . $rowID . " <> :id ORDER BY created_at DESC");
        $this->db->bind(":id", auth()->id);
        $result = $this->db->resultSet();
        return $result;
    }

    // TO SELECT ONE ROW BY ID IN ANY TABLE BY TABLE NAME
    public function whereID(string $table, int $id)
    {
        $this->db->query("SELECT * FROM " . $table . " WHERE id = :id LIMIT 1");
        $this->db->bind(":id", $id);
        $result = $this->db->single();
        if($result) { return $result; }
        else { return false; }
    }

    // TO SELECT ONE ROW BY ID IN ANY TABLE BY TABLE NAME
    public function whereUserID(string $table, int $user_id)
    {
        $this->db->query("SELECT * FROM " . $table . " WHERE user_id = :user_id");
        $this->db->bind(":user_id", $user_id);
        if($table == 'general') { $result = $this->db->single(); }
        else { $result = $this->db->resultSet(); }
        if($result) { return $result; }
        else { return false; }
    }

    // SAVE ANY UPDATING DATA FROM ANY TABLE
    public function insert(string $table, object $data)
    {
        // SET THE PART 1 OF THE QUERY AND THE TABLE NAME WILL COME FROM CONTROLLER 
        $query = 'INSERT INTO ' . $table . ' (';
        // ARRAY HAVE ALL FIELDS THAT WILL MAKE BIND
        $binding = [];

        // LOOPING ON OBJECT TO SET THE PART 2 OF THE QUERY [ COL NAME ... ] AND THE BINDING ARRAY
        foreach($data as $key => $value) :
            $query .= $key . ', ';
            $binding[':'. $key] = $value;
        endforeach;

        $query = rtrim($query, ', ') . ') VALUES (';

        // LOOPING ON OBJECT TO SET THE PART 3 OF THE QUERY  [ VALUES ( ... ) ]
        foreach($data as $key => $value) :
            $query .= ':' . $key . ', ';
        endforeach;

        $query = rtrim($query, ', ') . ')';


        // PREPAR THE QUERY
        $this->db->query($query);

        // LOOPING ON THE ARRAY TO BIND HIS INDEX
        foreach($binding as $key => $value) :
            $this->db->bind($key, $value);
        endforeach;

        // EXECUTE THE QUERY AND RETURN TRUE IF SUCCESS OR FALSE IF HAS ERROR
        if($this->db->execute())
            return true;
        else 
            return false;
    }

    // SAVE ANY UPDATING DATA FROM ANY TABLE
    public function save(string $table, object $data)
    {
        // TO REMOVE ANY USER_ID BECOUSE NOT NEED IT
        if(isset($data->user_id))
            unset($data->user_id);

        // SET THE PART 1 OF THE QUERY AND THE TABLE NAME WILL COME FROM CONTROLLER 
        $query = 'UPDATE ' . $table . ' SET ';
        // ARRAY HAVE ALL FIELDS THAT WILL MAKE BIND
        $binding = [];

        // LOOPING ON OBJECT TO SET THE PART 2 OF THE QUERY AND THE BINDING ARRAY
        foreach($data as $key => $value) :
            if($key != 'id')
                $query .= $key . ' = :' . $key . ', ';

            $binding[':'. $key] = $value;
        endforeach;

        // ADD THE LAST PART OF QUERY [ CONDETION ] AND REMOVE THE LAST COMA
        $query = rtrim($query, ', ') . ' WHERE id = :id';

        // PREPAR THE QUERY
        $this->db->query($query);

        // LOOPING ON THE ARRAY TO BIND HIS INDEX
        foreach($binding as $key => $value) :
            $this->db->bind($key, $value);
        endforeach;

        // EXECUTE THE QUERY AND RETURN TRUE IF SUCCESS OR FALSE IF HAS ERROR
        if($this->db->execute())
            return true;
        else 
            return false;
    }

    // TO DELETE ANY RECOURD HIS ID FROM ANY TABLE BY TABLE NAME
    public function delete(string $table, int $id)
    {
        $this->db->query('DELETE FROM ' . $table . ' WHERE id = :id');
        $this->db->bind(':id', $id);

        if($this->db->execute())
            return true;
        else
            return false;
    }

    // RETURN TURE THEN THIS FIELD DATA IS ALREADY EXISTING / RETURN FALSE THEN THE FIELD DATA NOT EXISTING
    public function issetField(string $table, string $field, object $data)
    {
        $user_id = isset($data->user_id) ? 'user_id = :user_id AND ' : '';
        $id = isset($data->id) ? ' id <> :id AND ' : '';

        // MAKE QUERY AND BIND THE VALUES
        $this->db->query('SELECT ' . $field . ' FROM ' . $table . 
                            ' WHERE ' . $user_id . $id . $field . ' = :value');

        if(isset($data->id))
            $this->db->bind(':id', $data->id);

        $this->db->bind(':value', $data->$field);

        // IF THIS TABLE HAVE USER ID THEN WILL USE THIS
        if(isset($data->user_id))
            $this->db->bind(':user_id', $data->user_id);

        // RUN THE QUERY
        $this->db->execute();
        // Check if Theis Field is already Existing
        if ($this->db->rowCount() > 0)
            return true;     // THEN WE HAVE THE SAME DATA TO ANOTHER RECORD
        else
            return false;   // NOT HAVE A SAME DATA
    }

} 