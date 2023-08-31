<?php
class DBQueries {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Add more methods for different queries as needed
    // Example method:
    public function insertData($table, $data) {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>
