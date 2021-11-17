
    function ShowHideDiv() {

        var dvdOption = document.getElementById("dvdOption");
        var bookOption = document.getElementById("bookOption");
        var furnitureOption = document.getElementById("furnitureOption");


        bookOption.style.display = productType.value == "1" ? "block" : "none";
        dvdOption.style.display = productType.value == "2" ? "block" : "none";
        furnitureOption.style.display = productType.value == "3" ? "block" : "none";

 
    }


    function setAttributes(){

        var height = document.getElementById("height").value;
        var length = document.getElementById("length").value;
        var width = document.getElementById("width").value;
        var size = document.getElementById("size").value;
        var weight = document.getElementById("weight").value;
        
        
        if(document.getElementById('productType').value == "3") {
            document.getElementById("attributes").value = (height +"x"+length+"x"+width);
        }

        else if(document.getElementById('productType').value == "2") {
            document.getElementById("attributes").value = size;
        }

        else if(document.getElementById('productType').value == "1") {
            document.getElementById("attributes").value = weight;
        }  
    }


