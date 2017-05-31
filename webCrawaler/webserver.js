var http = require('http');
var fs = require('fs');
var url = require('url');
var path = require('path');
var formidable = require("formidable");
var util = require('util');
const spawn = require('child_process').spawn;
// Create a server
http.createServer( function (request, response) {  
    if (request.method.toLowerCase() == 'get') {
        display(request,response);
    } else if (request.method.toLowerCase() == 'post') {
        processAllFieldsOfTheForm(request, response);
    }
}).listen(8046);

function display(request,response){
    // Parse the request containing file name
   var pathname = url.parse(request.url).pathname;
   
   // Print the name of the file for which request is made.
   console.log("Request for " + pathname + " received.");
   
   // Read the requested file content from file system
   fs.readFile(pathname.substr(1), function (err, data) {
      if (err) {
         console.log(err);
         // HTTP Status: 404 : NOT FOUND
         // Content Type: text/plain
         response.writeHead(404, {'Content-Type': 'text/html'});
      }else {	
         //Page found	  
         // HTTP Status: 200 : OK
         // Content Type: text/plain
         response.writeHead(200, {'Content-Type': 'text/html'});	
         
         // Write the content of the file to response body
         response.write(data.toString());		
      }
      // Send the response body 
      response.end();
    });     
}

function processAllFieldsOfTheForm(req, res) {
    var form = new formidable.IncomingForm();
    console.log("kk");  
    form.parse(req, function (err, fields, files) {
        //Store the data from the fields in your data store.
        //The data store could be a file or database or any other store based
        //on your application.
        res.writeHead(200, {
            'content-type': 'text/plain'
        });
        res.write('\n\n');
        console.log("whatup");
        fs.writeFileSync("url.txt",fields.ss);
        const execFile = require('child_process').execFile;
        const spawn = require('child_process').spawn;
        const ls = spawn('scrapy', ['crawl', 'mygov_spider']);

        ls.stdout.on('data', (data) => {
        console.log(`stdout: ${data}`);
        });

        ls.stderr.on('data', (data) => {
        console.log(`stderr: ${data}`);
        });

        ls.on('close', (code) => {
        console.log(`child process exited with code ${code}`);
    });
        var temp = fs.readFileSync("webCrawaler/details.txt");
        res.end(temp);
        //     fields: fields.ss,
        //     files: files
        // }));
    });
}