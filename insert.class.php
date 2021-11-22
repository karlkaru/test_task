<?php
include_once 'model.php';


class Insert extends Model{
	public function insertRecord($post) {
        $productname = $post['productname'];
        $sku = $post ['sku'];
        $price = $post ['price'];
        $attributes = $post ['attributes'];
        $sql = "INSERT INTO products VALUES ('0', '$productname', '$sku', '$price', '$attributes')";
        $result = $this->conn->query($sql);
        if($result){
            header('location:index.php?msg=ins');
        } else {
            echo "Error ".$sql."<br>".$this->conn->error;
        }
        
    }
}
?>



