<?php
    include 'model.php';
    include 'display-product.class.php';
    include 'massdelete.class.php';
    include 'header.php';

    $obj = new Display();
    $data = $obj->displayRecord();
    
    $obj1 = new Massdelete();
    $obj1 -> massDelete(); 
        
?>




    <form action="" method="post">
    <nav class="navbar navbar-expand navbar-light">
    <div class="container-fluid">
        <div>
            <h3>Product List</h3>
        </div>
        <div class="justify-content-end">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">

                <input type='submit' id="delete-product-btn" class="btn btn-primary m-2" value='MASS DELETE'>
            </li>
            <li>    

                <a class="btn btn-primary m-2" href="add-product.php">Add</a>
                
            </li>
            </ul>
        </div>
    </div>
  </nav>

<hr>

<div class="row">     
<?php
    $data = $obj->displayRecord();

    foreach ($data as $value) {
    ?>
        <div class="card" style="width: 12rem; margin: 0.7rem">
                    <div class="card-body">
                    
                    <input type="checkbox" class="delete-checkbox" value="<?php echo $value['id']; ?>" name="id[]">
                        <div class="title text-center">
                            <a><?php echo $value['productname']; ?></a>
                        </div>

                        <div class="desc text-center">
                            <?php echo $value['price'] . "$"; ?>
                        </div> 	

                        <div class="desc text-center">
                            <?php echo $value['sku']; ?>
                        </div>
                        
                        <div class="desc text-center">
                            <?php echo $value['attributes']; ?>
                        </div> 
                        
                    </div>
                </div>
    <?php
    }
?>

        </div>
</form>

</div>
</body>
</html>