<?php

include 'insert.class.php';
include 'header.php';
$obj = new Insert();    
    
if(isset($_POST['submit'])) {
    if(!empty($_POST['productname']) && !empty($_POST['sku']) && !empty($_POST['price'])){
      $obj->insertRecord($_POST);  
    }
    else {
        echo '<script>alert("Please fill all fields")</script>';
    }
} 


?>


<form action="" method="POST" id="product_form">
<nav class="navbar navbar-expand navbar-light bg-white">
    <div class="container-fluid">
        <div>
            <h3>Add Products</h3>
        </div>
        <div class="justify-content-end">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item m-1">
                <input type="submit" name="submit" value="Save" onclick="setAttributes()" class="btn btn-primary m-2">
            </li>
            <li class="nav-item m-1">
                <a class="btn btn-primary m-2" href="index.php">Cancel</a>
            </li>
            </ul>
        </div>
    </div>
  </nav>

  
<div class="form-control form-horizontal">
        <div class="form-group  m-2">
            <label for="sku" class="col-sm-1 control-label">SKU:</label>
            <input type="text" name="sku" id="sku">
        </div>

        <div class="form-group m-2">
            <label for="productname" class="col-sm-1 control-label">Name</label>
            <input type="text" name="productname" id="name">
            
        </div>

        <div class="form-group m-2">
            <label for="price" class="col-sm-1 control-label">Price ($)</label>
            <input type="text" name="price" id="price">
        </div>


    <div class="form-group m-2">
        <label  class="col-sm-1 control-label">Type Switcher</label>
        <select id="productType" class="col-sm-1 control-label" onchange="ShowHideDiv()">
            <option value="0">-</option>
            <option value="1">Book</option>
            <option value="2">DVD</option>
            <option value="3">Furniture</option>          
        </select>
    </div>

    <div class="form-group m-2">
        <div id="dvdOption">
            <label for="attributes" class="col-sm-1 control-label">Size (MB):</label>
            <input type="text" id="size"/> <br>
            <div>
                <p>Please, provide size</p>
            </div>
        </div>
    </div>

    <div class="form-group m-2">
        <div id="bookOption">
            <label for="attributes" class ="col-sm-1 control-label">Weight</label>
            <input type="text" id="weight"/> <br>
            <div>
                <p>Please, provide weight</p>
            </div>
        </div>
    </div>

    <div class="form-group m-2">
        <div id="furnitureOption"> 
            <label for="height" class="col-sm-1 control-label my-2">Height:</label>
            <input type="text" id="height"/> <br>
            <label for="width" class="col-sm-1 control-label my-2">Width:</label>
            <input type="text" id="width"/> <br>
            <label for="length" class="col-sm-1 control-label my-2">Length:</label>
            <input type="text" id="length"/> <br>
            <div>
                <p>Please, provide dimensions</p>
            </div>
        </div>    
    </div>
     <input type="hidden" name="attributes" id="attributes">   


</form>



        
   

