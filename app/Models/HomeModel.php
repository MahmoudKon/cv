<?php
class HomeModel extends Model
{
    public function selectTables(string $table, int $id): object
    {
        $row = $table == 'users' ? 'id' : 'user_id';
        $this->db->query("SELECT * FROM " . $table . " WHERE " . $row . " = :id");
        $this->db->bind(':id', $id);
        if (in_array($table, ['general', 'users'])) {
            $result = $this->db->single();
        } else {
            $result = $this->db->resultSet();
        }
        return (object) $result;
    }

    public function selectUsers(): object
    {
        $this->db->query("SELECT * FROM users WHERE permissions = 'user'");
        $result = $this->db->resultSet();
        return (object) $result;
    }
}
