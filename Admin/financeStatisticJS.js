function nameOptionChecked(){
    //sessionStorage.setItem("option", "name");
    let search_product_name=document.getElementById("search-product");
    let search_product_type=document.getElementById("search-product-type");
    search_product_name.style.display="block";
    search_product_type.style.display="none";

}
function typeOptionChecked(){
    //sessionStorage.setItem("option", "type");
    let search_product_name=document.getElementById("search-product");
    let search_product_type=document.getElementById("search-product-type");
    search_product_name.style.display="none";
    search_product_type.style.display="block";
}
function SubmitSearch(){
    let search_result=document.getElementById("search-result");
    search_result.style.display="block";
    console.log(search_result);
}

var option=sessionStorage.getItem("option");
let search_product_name=document.getElementById("search-product");
let search_product_type=document.getElementById("search-product-type");
//console.log(search_product_name);
//console.log(search_product_type);
if(option===null){
    option="name";
    sessionStorage.setItem("option", option);
}

if(option==="name"){
    search_product_name.style.display="block";
    search_product_type.style.display="none";
    console.log(1);
}
else{
    search_product_name.style.display="none";
    search_product_type.style.display="block";
    console.log(2);
}
