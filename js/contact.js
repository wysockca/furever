var contactForm = document.getElementById("contactForm");
var sendBtn = document.getElementById("sendBtn");

sendBtn.addEventListener("click", addMsgFunction, false);

function addMsgFunction(e) {
	var myRequest = new XMLHttpRequest; 
	myRequest.onreadystatechange = function(){      
		if(myRequest.readyState === 4){        
			//console.log(myRequest.responseText);
			var responseObj = JSON.parse(myRequest.responseText);
			//console.log(responseObj.success);
		} 
	};

	var nameInput = document.getElementById("nameInput");
	var emailInput = document.getElementById("emailInput");
	var subjectInput = document.getElementById("subjectInput");
	var msgInput = document.getElementById("msgInput");

	myRequest.open("POST", "process-contact.php", true);
	myRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	myRequest.send("name=" + nameInput.value+
		"&email=" + emailInput.value+
		"&subject=" + subjectInput.value+
		"&message=" + msgInput.value);

	contactForm.innerHTML = '';
	
	var newPTag = document.createElement("p");
	var newH2Tag = document.createElement("h2");
	newH2Tag.innerHTML = "Thank you for your message"
	newPTag.innerHTML = "We appreciate your feedback! We will get back to you as soon as possible.";
	newH2Tag.setAttribute("id", "successHdr");
	newPTag.setAttribute("id", "successMsg");
	contactForm.appendChild(newH2Tag);
	contactForm.appendChild(newPTag);
}