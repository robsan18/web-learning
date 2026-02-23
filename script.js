let page=0;

function nextPage(pages){
if(page<pages.length-1){
page++;
showPage(pages);
}
}

function prevPage(pages){
if(page>0){
page--;
showPage(pages);
}
}

function showPage(pages){
document.getElementById("content").innerHTML=pages[page];
updateProgress(pages.length);
}

function updateProgress(total){
let percent=Math.floor(((page+1)/total)*100);
document.getElementById("bar").style.width=percent+"%";
document.getElementById("percent").innerText=percent+"% completed";
}

/* QUIZ */
function checkAnswer(correct){
let result=document.getElementById("result");

if(correct){
result.innerHTML="✅ Correct!";
result.style.color="green";
}else{
result.innerHTML="❌ Wrong";
result.style.color="red";
}
}
