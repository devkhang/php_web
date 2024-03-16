function deleteProduct(){
    let a=confirm("Bạn có muốn xóa sản phẩm");
    if(a===true)
        alert("Xóa sản phẩm thành công");
    
}

//add xoa button
let xoa_butto;

let phone_list_element=document.getElementsByClassName("phone_list_element");
for(let i=0; i<phone_list_element.length; ++i){
    xoa_button=document.createElement("button");
    xoa_button.setAttribute("type","button");
    xoa_button.setAttribute("onclick","deleteProduct()");
    xoa_button.style.width='100%';
    xoa_button.style.boxSizing="border-box";
    xoa_button.innerText="Xóa";
    phone_list_element[i].append(xoa_button);
    console.log(phone_list_element[i]);
}