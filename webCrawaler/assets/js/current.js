function readTextFile() {
			var file = new XMLHttpRequest();
			file.open("GET", "/../../hit_urls.txt", false);
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
			// var file1 = new XMLHttpRequest();
			 file.send(null);
			// file1.open("GET", "../../pancard_url.txt", false);
            // file1.onreadystatechange = function () {
			// 	if (file1.readyState === 4) {
			// 		if (file1.status === 200 || file1.status == 0) {
			// 			var lines = file1.responseText.split('\n');
			// 			if(lines[0] == "")
			// 				document.getElementById("pancard").innerHTML = '-';
			// 			else
			// 				document.getElementById("pancard").innerHTML = lines.length;						
			// 		}
			// 	}
			// }
			// file1.send(null);
			
			// var file2 = new XMLHttpRequest();
			// file2.open("GET", "/../../aadhaar_url.txt", false);
            // file2.onreadystatechange = function () {
			// 	if (file2.readyState === 4) {
			// 		if (file2.status === 200 || file2.status == 0) {
			// 			var lines = file2.responseText.split('\n');
			// 			if(lines[0] == "")
			// 				document.getElementById("aadhaar").innerHTML = '-';
			// 			else
			// 				document.getElementById("aadhaar").innerHTML = lines.length;
						
			// 		}
			// 	}
			// }
			// file2.send(null);
			// var file3 = new XMLHttpRequest();
			// file3.open("GET", "/../../voterid_url.txt", false);
            // file3.onreadystatechange = function () {
			// 	if (file3.readyState === 4) {
			// 		if (file3.status === 200 || file3.status == 0) {
			// 			var lines = file3.responseText.split('\n');
			// 			if(lines[0] == "")
			// 				document.getElementById("voter").innerHTML = '-';
			// 			else
			// 				document.getElementById("voter").innerHTML = lines.length;
						
			// 		}
			// 	}
			// }
			//file3.send(null);
			var file4 = new XMLHttpRequest();
			file4.open("GET", "/../../regex.csv", false);
            file4.onreadystatechange = function () {
				if (file4.readyState === 4) {
					if (file4.status === 200 || file4.status == 0) {
						var lines = file4.responseText.split('\n');
						response = "";
						for (i = 0; i < lines.length; i++) { 
							response += "<tr><td>" + lines[i].split(",")[0].toUpperCase() + "</td><td id=\""+lines[i].split(",")[0].toLowerCase()+"\">";// + '-' + "</td></tr>";
							var fil = new XMLHttpRequest()
							fil.open("GET", "/../../"+lines[i].split(",")[0].toLowerCase()+"_url.txt", false);
							fil.onreadystatechange = function () {
								if (fil.readyState === 4) {
									if (fil.status === 200 || fil.status == 0) {
										var ls = fil.responseText.split('\n');
										if(ls[0] != "")
											response+= ls.length+ "</td></tr>";
										else
											response+= "-</td></tr>";
											
									}
								}
							}
							fil.send(null);
						}
						document.getElementById("reg").innerHTML += response;
						
					}
				}
			}
			file4.send(null);
}