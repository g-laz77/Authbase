var something = "";
var count = 0;
//var fs = require('fs');

function onsea(order) {
	count = 1;
	console.log(order);
	something = "jj";
}

function readTextFile() {
	//console.log("hello");
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
				document.getElementById("urls").innerHTML = response + "";

			}
		}
	}
	file.send(null);
	var file4 = new XMLHttpRequest();
	file4.open("GET", "/../../regex.csv", false);
	file4.onreadystatechange = function () {
		if (file4.readyState === 4) {
			if (file4.status === 200 || file4.status == 0) {
				var lines = file4.responseText.split('\n');
				response = "";
				for (i = 0; i < lines.length; i++) {
					response += "<tr><td>" + lines[i].split(",")[0].toUpperCase() + "</td><td id=\"" + lines[i].split(",")[0].toLowerCase() + "\">"; // + '-' + "</td></tr>";
					var fil = new XMLHttpRequest()
					fil.open("GET", "/../../" + lines[i].split(",")[0].toLowerCase() + "_url.txt", false);
					fil.onreadystatechange = function () {
						if (fil.readyState === 4) {
							if (fil.status === 200 || fil.status == 0) {
								var ls = fil.responseText.split('\n');
								if (ls[0] != "" && i == 0)
									response += ls.length + "\t<a style=\"color:white;\" href=\"/pancard.html\">[View URL's]</a></td></tr>";
								else if(ls[0] != "" && i == 3)
									response += ls.length + "\t<a style=\"color:white;\" href=\"/bank.html\">[View URL's]</a></td></tr>";									
								else
								{
									if(i==2)
										response += "<strike>Found</strike></td></tr>";
									else
										response += "-</td></tr>";
								}
										
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
	//console.log(something);
	//count = 0;
	var fil = new XMLHttpRequest();
	var search = "";
	fil.open("GET", "/../../search_urls.txt", false);
	fil.onreadystatechange = function () {
		if (fil.readyState === 4) {
			if (fil.status === 200 || fil.status == 0) {
				search = fil.responseText;
				window.count = 1;
			}
		}
	}
	console.log()
	//fs.closeSync(fs.openSync('search_url.txt', 'w'));
	fil.send(null);
	if (search != "") {
		window.count = 1;
		var file = new XMLHttpRequest();
		file.open("GET", "/../../hit_urls.txt", false);
		file.onreadystatechange = function () {
			if (file.readyState === 4) {
				if (file.status === 200 || file.status == 0) {
					var lines = file.responseText.split('\n');
					for (i = 0; i < lines.length; i++) {
						if (lines[i].indexOf(search) != -1) {
							response = "<tr><td>" + i + "</td><td>" + lines[i] + "</td></tr>";
							document.getElementById("result").innerHTML = response + "";
							break;
						}
					}
				}
			}
		}
		file.send(null);
	}
	else{
		document.getElementById("result").innerHTML = "";
	}
	
}

// }