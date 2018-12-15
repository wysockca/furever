
var toggle = document.getElementById('toggle');
var status = "liked.png";

toggle.addEventListener('click', changeStatus, false);

function getQueryVariable(variable){
   var query = window.location.search.substring(1);
   var vars = query.split("?");
   for (var i=0;i<vars.length;i++){
		var pair = vars[i].split("=");
		if(pair[0] == variable){
		return pair[1];
        }
    }
}

var id_is = getQueryVariable("id");
console.log(id_is);

function changeStatus(e) {
  if ( status == "liked.png" ) {
    document.images["toggle"].src = "assets/liked.png";
    document.images["toggle"].alt = "liked";
    status  = "notliked.png";
    var like = new XMLHttpRequest();
	like.open('POST','save-like.php', true);
	like.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	
	like.onload = function() {
  		console.log(this.responseText);
  	}
	like.send("pet_id="+id_is);
	} else{
    document.images["toggle"].src = "assets/notliked.png";
    document.images["toggle"].alt = "unliked";
    status  = "liked.png";
    var unlike = new XMLHttpRequest();
	unlike.open('POST','delete-like.php', true);
	unlike.setRequestHeader("Content-type","application/x-www-form-urlencoded");

	unlike.onload = function() {
  	console.log(this.responseText);
  }
  unlike.send("pet_id="+id_is);
  }
}





