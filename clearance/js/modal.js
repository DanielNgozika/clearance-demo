var check =false; 
var faculty = document.getElementById('faculty')
var facultybtn = document.getElementById('facultybtn')
var facultyspan = document.getElementById('close');
//alert(facultybtn)

facultybtn.onClick=function(){
	faculty.style.display = "block"
return check = true
}



facultyspan.onClick = function(){
	faculty.style.display = "none";
}

window.onclick = function(event){
	if(event.target==faculty)
		faculty.style.display = "none"
}
 