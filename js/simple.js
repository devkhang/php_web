function watchProductDetail(information){
    
    //get masp
    console.log("watchproductdetail");
    let input=document.chitietsp.masp;
    let masp=information.getElementsByClassName("masp")[0].innerHTML;
    
    //asign masp as the value of input
    input.value=masp;

    document.chitietsp.submit();


}