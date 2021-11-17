<?php


class Display extends Model {
   public function displayRecord(){
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        } return $data;
    } 
}




?>