
    function ShowHideDiv() {

        let dvdOption = document.getElementById("dvdOption");
        let bookOption = document.getElementById("bookOption");
        let furnitureOption = document.getElementById("furnitureOption");


        bookOption.style.display = productType.value == "1" ? "block" : "none";
        dvdOption.style.display = productType.value == "2" ? "block" : "none";
        furnitureOption.style.display = productType.value == "3" ? "block" : "none";

 
    }


    function setAttributes(){

        let height = document.getElementById("height").value;
        let length = document.getElementById("length").value;
        let width = document.getElementById("width").value;
        let size = document.getElementById("size").value;
        let weight = document.getElementById("weight").value;
        
        
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


