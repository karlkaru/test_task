<?php


class Massdelete extends Model{
    public function massDelete() {
        if(isset($_POST['id'])){
            foreach ($_POST['id'] as $id):
                mysqli_query($this->conn,"DELETE FROM products WHERE id='$id'");
            endforeach;
     
            header('Location: index.php');
        }
    
    }
}

?>
