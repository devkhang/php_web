/*let key='1';

if(sessionStorage.getItem("key")===null){
    console.log("key is not initilazed, now key is created");
    sessionStorage.setItem("key",key);
}
else{
    console.log("use the created key");
}

key=sessionStorage.getItem("key");
console.log(key);
*/


function setisLoginTrue(currentTag){
    sessionStorage.setItem("loginState", "true");
    console.log("return to index");
    alert("Đăng nhập thành công");

    let userAccount=


    window.location="index.html"; 
}
function setisLoginFalse(currentTag){
    sessionStorage.setItem("loginState", "false");;
    alert("Đăng xuất thành công");
    window.location="index.html"; 
}
function muaHang(){
    alert("Đặt hàng thành công");
}






//remove advance search image
let advanced_search=document.getElementById("advanced_search");
let advanced_search_button=(advanced_search.getElementsByTagName("a"))[0];
let advanced_search_button_img=(advanced_search_button.getElementsByTagName("img"))[0];
/*advanced_search_button_img.setAttribute("src","assets/timkiemnangcao.png");
advanced_search_button_img.setAttribute("with", "50px");
advanced_search_button_img.setAttribute("height", "50px");*/
advanced_search_button_img.remove();

//add "tim kiem nang cao"
let advanced_search_top=document.createElement("div");
advanced_search_top.setAttribute("class","menu_top_element");
advanced_search_top.setAttribute("id","advancedSearch");
let advanced_search_link=document.createElement("a");
advanced_search_link.setAttribute("href","advanced_search.html")
advanced_search_top.appendChild(advanced_search_link);
advanced_search_link.innerText="Tìm kiếm nâng cao";
let menu_top=document.getElementById("menu_top");
menu_top.append(advanced_search_top);

//add onclick action to simple search "tim" button
inputSubmit.setAttribute("onclick","window.location.replace('search_result.html')");
simple_search_form.setAttribute("target","_blank");

//change submit to "tim" of advanced search + add onclick action to simple search "tim" button
let advanced_search_form=document.getElementById("item1");
if(advanced_search_form!=null)
{
    let advanced_submit_button=advanced_search_form.lastElementChild;
    advanced_submit_button.value="Tìm";
    advanced_submit_button.setAttribute("onclick","window.location.replace('search_result.html')");
    advanced_search_form.setAttribute("target","_blank");
}

//add onlick to "mua hang" button


let form_address=document.getElementById("form_address");
if(form_address!=null)
{
    let form_address_submit=form_address.lastElementChild;
    form_address_submit.setAttribute("onclick", "muaHang()");
}



//add image to indicate user account
let image=document.createElement("img");
image.setAttribute("src","assets/robute_drinking.jpeg");
let a_image=document.createElement("a");
a_image.append(image);
let div_a_image=document.createElement("div");
div_a_image.setAttribute("class","menu_top_element");
div_a_image.setAttribute("id","avatar-account");
div_a_image.append(a_image);
menu_top=document.getElementById("menu_top");
menu_top.append(div_a_image);

image.style.width="33.48px";
image.style.height="37.6px";
image.style.objectFit="cover";
image.style.borderStyle="hidden";
image.style.borderRadius="50%";

a_image.setAttribute("href","robute_user.html");










//actions when user log in and log out

let singout=document.getElementById("singout");
let login=document.getElementById("login");
let isLogin=sessionStorage.getItem("loginState");
console.log("isLogin:"+isLogin);
if(isLogin===null){
    isLogin="false";
    sessionStorage.setItem("loginState", isLogin);
}

if(isLogin==="true"){
    console.log("login is hidden");
    login.style.display="none";
    singout.style.display="inline";
    div_a_image.style.display="inline";
}
else{
    console.log("signout is hidden");
    login.style.display="inline";
    singout.style.display="none";
    div_a_image.style.display="none";
}

//add alert to "them vao gio hang" button
let addToCartButton=document.getElementsByClassName("add-to-cart");
if(addToCartButton.length!==0){
    addToCartButton=addToCartButton[0].getElementsByTagName("button")[0];
    addToCartButton.setAttribute("onclick","alert('Đã thêm sản phẩm vào giỏ hàng')")
}



