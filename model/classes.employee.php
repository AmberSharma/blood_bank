<?php
require_once 'model.php';
ini_set("display_error",'on');
class Employee extends model {
    
    public function employeeFetch(){
        $this->db->Fields ( array ( "id","name" ));
        $this->db->From ("employee");
        $this->db->Where (array ("type" => 1));
        $this->db->Select();
        return $this->db->resultArray();
    }
}
?>