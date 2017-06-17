function readTextFile() {
            
			var file = new XMLHttpRequest();
			file.open("GET", "../../hit_urls.txt", false);
            file.onreadystatechange = function () {
				if (file.readyState === 4) {
					if (file.status === 200 || file.status == 0) {
						var lines = file.responseText.split('\n');
						response = "<tr><th>#</th><th>URLs</th></tr>";
						for (i = 0; i < lines.length; i++) { 
							response += "<tr><td>" + i + "</td><td>" + lines[i] + "</td></tr>";
						}
						document.getElementById("urls").innerHTML = response+"";
						
					}
				}
			}
			file.send(null);

			file1.open("GET", "../../pancard_url.txt", false);
            file1.onreadystatechange = function () {
				if (file1.readyState === 4) {
					if (file1.status === 200 || file1.status == 0) {
						var lines = file1.responseText.split('\n');
						document.getElementById("pancard").innerHTML = lines.length;
						
					}
				}
			}
			file1.send(null);

			file2.open("GET", "../../aadhaar_url.txt", false);
            file2.onreadystatechange = function () {
				if (file2.readyState === 4) {
					if (file2.status === 200 || file2.status == 0) {
						var lines = file2.responseText.split('\n');
						document.getElementById("aadhaar").innerHTML = lines.length;
						
					}
				}
			}
			file2.send(null);

			file3.open("GET", "../../voterid_url.txt", false);
            file3.onreadystatechange = function () {
				if (file3.readyState === 4) {
					if (file3.status === 200 || file3.status == 0) {
						var lines = file3.responseText.split('\n');
						document.getElementById("voter").innerHTML = lines.length;
						
					}
				}
			}
			file2.send(null);
}