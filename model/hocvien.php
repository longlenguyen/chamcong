<?php
    function get_hocvien() {
        include 'database.php';
        $result = $db->query('select * from persons;');
        return $result;
    }
?>

