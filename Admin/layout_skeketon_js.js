function setisLoginTrue(currentTag){
    sessionStorage.setItem("loginState", "true");
    console.log("return to index");
    alert("Đăng nhập thành công");
    window.location="index.html"; 
}
function setisLoginFalse(currentTag){
    sessionStorage.setItem("loginState", "false");
    console.log("return to index");
    alert("Đăng xuất thành công");
    window.location="index.html"; 
}

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
    singout.style.display="flex";
}
else{
    console.log("signout is hidden");
    login.style.display="flex";
    singout.style.display="none";
}
