/* LOGIN */
function register(){
let u=document.getElementById("user").value;
let p=document.getElementById("pass").value;

localStorage.setItem("user",u);
localStorage.setItem("pass",p);

alert("Registered! Now login");
location="login.html";
}

function login(){
let u=document.getElementById("user").value;
let p=document.getElementById("pass").value;

if(u===localStorage.getItem("user") &&
   p===localStorage.getItem("pass")){
localStorage.setItem("logged","yes");
location="lessons.html";
}else{
alert("Wrong login");
}
}

function checkLogin(){
if(localStorage.getItem("logged")!=="yes"){
location="login.html";
}
}

function logout(){
localStorage.removeItem("logged");
location="index.html";
}


/* PROGRESS SAVE */
function saveProgress(module){
localStorage.setItem(module,"done");
}

function isDone(module){
return localStorage.getItem(module)==="done";
}


/* UNLOCK SYSTEM */
function unlockModules(){
for(let i=1;i<=7;i++){
let btn=document.getElementById("m"+i);

if(i===1 || isDone("m"+(i-1))){
btn.style.opacity="1";
btn.style.pointerEvents="auto";
}else{
btn.style.opacity="0.4";
btn.style.pointerEvents="none";
}
}
}


/* QUIZ RESULT */
function finishModule(module){
saveProgress(module);
alert("Module Completed!");
location="../lessons.html";
}


/* CERTIFICATE */
function checkCertificate(){
let done=0;
for(let i=1;i<=7;i++){
if(isDone("m"+i)) done++;
}

if(done===7){
document.getElementById("cert").style.display="block";
}
}