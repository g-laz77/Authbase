function readTextFile() {
            
			var file = new XMLHttpRequest();
			file.open("GET", "../../hit_urls.txt", false);
            file.onreadystatechange = function () {
				if (file.readyState === 4) {
					if (file.status === 200 || file.status == 0) {
						var lines = file.responseText.split('\n');
						response = "<tr><th>Index</th><th>Scanned urls</th></tr>";
						for (i = 0; i < lines.length; i++) { 
							response += "<tr><td>" + i + "</td><td>" + lines[i] + "</td></tr>";
						}
						document.getElementById("urls").innerHTML = response+"";
						
					}
				}
			}
			file.send(null);
}