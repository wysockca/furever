var searchBtn = document.getElementById("searchBtn");
var results = document.getElementById("results");

searchBtn.addEventListener("click", locationSearch, false);

function locationSearch(e){
	var myRequest = new XMLHttpRequest; 
	myRequest.onreadystatechange = function(){
		if(myRequest.readyState === 4){        
			var responseObj = JSON.parse(myRequest.responseText);
			console.log(myRequest.responseText);

			results.innerHTML = '';
			for(var i=0; i<responseObj.length; i++){				
				var newDiv = document.createElement("div");
				var imgTag = document.createElement("img");
				var nameTag = document.createElement("h2");
				var detailsTag = document.createElement("p");
				var aTag = document.createElement("a");
				var infoDiv = document.createElement("div");

				imgTag.setAttribute("src", "assets/"+responseObj[i].image);
				aTag.setAttribute("href", "pet-profile.php?id="+responseObj[i].id);
				newDiv.setAttribute("class", "pet");
				infoDiv.setAttribute("class", "info");
				
				var petName = document.createTextNode(responseObj[i].name);
				nameTag.appendChild(petName);

				var details = document.createTextNode(responseObj[i].sex + ", " + responseObj[i].breed);
				detailsTag.appendChild(details);

				var profile = document.createTextNode("My Profile");
				aTag.appendChild(profile);

				infoDiv.appendChild(nameTag);
				infoDiv.appendChild(detailsTag);

				newDiv.appendChild(imgTag);
				newDiv.appendChild(infoDiv)
				newDiv.appendChild(aTag);

				results.appendChild(newDiv);
			}
		} 
	};

	var locationInput = document.getElementById("locationInput");
	myRequest.open("POST", "search.php", true);
	myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	myRequest.send("browse="+locationInput.value);


}

