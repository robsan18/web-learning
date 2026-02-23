function completeLesson(name){
localStorage.setItem(name,"done");
alert("Lesson Completed!");
}

function checkLesson(name,id){
if(localStorage.getItem(name)){
document.getElementById(id).innerHTML="✅ Completed";
}
}