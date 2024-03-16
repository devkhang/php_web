let new_img_form=document.getElementById("new-product-img-form");
new_img_form.style.display="none";
function deleteImg(){
    let old_img=document.getElementsByClassName("box-gallery")[0];
    let deleteButon=old_img.getElementsByTagName("button")[0];
    old_img=old_img.getElementsByTagName("img") [0];
    deleteButon.style.display="none";
    old_img.style.display="none";
    new_img_form.style.display="inline";
    
}