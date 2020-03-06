
		// document.getElementById('correctionBox').style.display = "none";





			function checkTheAnswer() {


				var currentURL = document.URL;

				var lengthOfLocation = currentURL.length;


				for(var i = 0; i < lengthOfLocation; i++ ){

				var currentPageNumber = currentURL.charAt(i);

					switch(currentPageNumber) {
					case "2":

				var answer = document.getElementById('answerBox').value;

				if(answer === "variable") {

					alert('you have it correct');

				} else if(answer == "") {

					alert("The field cannot be empty");


				} else {

				document.getElementById('correctionBox').innerHTML= "hi";




					// document.getElementById('correctionBox').style.display = "block";


				}

					break;
					case "3":
					alert("i found number ");
					break;
					case "4":
					alert("i found number 2");
					break;
					case "5":
					alert("i found number ");
					break;
					case "6":
					alert("i found number 2");
					break;
					case "7":
					alert("i found number ");
					break;
					case "8":
					alert("i found number 2");
					break;
					case "9":
					alert("i found number ");
					break;
					case "10":
					alert("i found number 2");
					break;
					case "11":
					alert("i found number ");
					break;

					}




				}



			}
