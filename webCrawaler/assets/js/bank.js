function rtf()
{
	var file = new XMLHttpRequest();
	file.open("GET", "/../../bank_url.txt", false);
	file.onreadystatechange = function () {
		if (file.readyState === 4) { 
			if (file.status === 200 || file.status == 0) {
                var lines = file.responseText.split('\n');
                response = "";
				for (i = 0; i < lines.length; i++) {

					response += "<tr><td>" + i + "</td><td><a href=\"" + lines[i] + "\">"+lines[i]+"</td></tr>";
				}
				document.getElementById("urls").innerHTML = response + "";
			}
		}
    }
    file.send(null);
}