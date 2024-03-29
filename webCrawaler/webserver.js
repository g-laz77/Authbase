var http = require('http');
var fs = require('fs');
var url = require('url');
var path = require('path');
var request = require('request');
var cheerio = require('cheerio');
var formidable = require("formidable");
var util = require('util');
var sleep = require('sleep');


const spawn = require('child_process').spawn;
// Create a server
http.createServer( function (request, response) {  
    if (request.method.toLowerCase() == 'get') {
        display(request,response);
    } else if (request.method.toLowerCase() == 'post') {
        processAllFieldsOfTheForm(request, response);
    }
}).listen(9000);

function display(req,res) {
  if(req.url.indexOf('.csv') != -1){ //req.url has the pathname, check if it conatins '.html'
      if(req.url.indexOf('/regex.csv') != -1){
        var domain = "";
        //sleep.sleep(5);
        fs.readFile(__dirname + '/regex.csv', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/txt'});
          res.write(data);
          res.end();
        });
      }
  }
  if(req.url.indexOf('.txt') != -1){ //req.url has the pathname, check if it conatins '.html'
      if(req.url.indexOf('/hit_urls.txt') != -1){
        var domain = "";
        //sleep.sleep(5);
        fs.readFile(__dirname + '/hit_urls.txt', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/txt'});
          res.write(data);
          res.end();
        });
      }
      else if(req.url.indexOf('/voterid_url.txt') != -1){
        var domain = "";
        //sleep.sleep(5);
        fs.readFile(__dirname + '/voterid_url.txt', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/txt'});
          res.write(data);
          res.end();
        });
      }
      
      else if(req.url.indexOf('/aadhaar_url.txt') != -1){
        var domain = "";
        //sleep.sleep(5);
        fs.readFile(__dirname + '/aadhaar_url.txt', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/txt'});
          res.write(data);
          res.end();
        });
      }
      else if(req.url.indexOf('/pancard_url.txt') != -1){
        var domain = "";
        
        //sleep.sleep(5);
        fs.readFile(__dirname + '/pancard_url.txt', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/txt'});
          res.write(data);
          res.end();
        });
      }
      else if(req.url.indexOf('/search_urls.txt') != -1){
        var domain = "";
        fs.readFile(__dirname + '/search_urls.txt', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/txt'});
          res.write(data);
          res.end();
        });
        //fs.closeSync(fs.openSync('search_url.txt', 'w'));
      }
      else if(req.url.indexOf('_url.txt') != -1){
        var domain = "";
        if (!fs.existsSync(req.url.substr(1))) {
          fs.closeSync(fs.openSync(req.url.substr(1), 'w'));
        }
        fs.readFile(__dirname + req.url, function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/txt'});
          res.write(data);
          res.end();
        });
      }
  }
    if(req.url.indexOf('.html') != -1){ //req.url has the pathname, check if it conatins '.html'
      if(req.url.indexOf('/dashboard.html') != -1){
        var domain = "";
        //sleep.sleep(5);
        fs.readFile(__dirname + '/page/dashboard.html', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/html'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/bank.html') != -1){
        var domain = "";
        //sleep.sleep(5);
        fs.readFile(__dirname + '/page/bank.html', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/html'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/pancard.html') != -1){
        var domain = "";
        //sleep.sleep(5);
        fs.readFile(__dirname + '/page/pancard.html', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/html'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/auth.html') != -1){
        var domain = "";
        //sleep.sleep(5);
        fs.readFile(__dirname + '/page/auth.html', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/html'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/index.html') != -1){
        fs.readFile(__dirname + '/page/index.html', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/html'});
          res.write(data);
          res.end();
        });
      }
    }

    if(req.url.indexOf('.js') != -1){ //req.url has the pathname, check if it conatins '.js'

      if(req.url.indexOf('/assets/js/material-dashboard.js') != -1){
        fs.readFile(__dirname + '/assets/js/material-dashboard.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/js/jquery-3.1.0.min.js') != -1){
        fs.readFile(__dirname + '/assets/js/jquery-3.1.0.min.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/js/bootstrap.min.js') != -1){
        fs.readFile(__dirname + '/assets/js/bootstrap.min.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/js/material.min.js') != -1){
        fs.readFile(__dirname + '/assets/js/material.min.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/js/chartist.min.js') != -1){
        fs.readFile(__dirname + '/assets/js/chartist.min.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/js/bootstrap-notify.js') != -1){
        fs.readFile(__dirname + '/assets/js/bootstrap-notify.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/server.js') != -1){
        fs.readFile(__dirname + '/server.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/js/demo.js') != -1){
        fs.readFile(__dirname + '/assets/js/demo.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/js/current.js') != -1){
        fs.readFile(__dirname + '/assets/js/current.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/js/curren.js') != -1){
        fs.readFile(__dirname + '/assets/js/curren.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/js/bank.js') != -1){
        fs.readFile(__dirname + '/assets/js/bank.js', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/javascript'});
          res.write(data);
          res.end();
        });
      }
    }

    if(req.url.indexOf('.css') != -1){ //req.url has the pathname, check if it conatins '.css'
      if(req.url.indexOf('/assets/css/material-dashboard.css') != -1){
        fs.readFile(__dirname + '/assets/css/material-dashboard.css', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/css'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/css/bootstrap.min.css') != -1){
        fs.readFile(__dirname + '/assets/css/bootstrap.min.css', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/css'});
          res.write(data);
          res.end();
        });
      }
      if(req.url.indexOf('/assets/css/demo.css') != -1){
        fs.readFile(__dirname + '/assets/css/demo.css', function (err, data) {
          if (err) console.log(err);
          res.writeHead(200, {'Content-Type': 'text/css'});
          res.write(data);
          res.end();
        });
      }
    }
}

function processAllFieldsOfTheForm(req, res) {
    var form = new formidable.IncomingForm();
    // #console.log("kk");  
    form.parse(req, function (err, fields, files) {
        if(fields.ss)
          fs.writeFileSync("url.txt",fields.ss);
        else if(fields.search)
          fs.writeFileSync("search_urls.txt",fields.search);
        else
          fs.appendFileSync("regex.csv",'\n'+fields.rtype+','+fields.regex);
    });
    // const execFile = require('child_process').execFile;
    // const spawn = require('child_process').spawn;
    // const ls = spawn('scrapy', ['crawl', 'mygov_spider']);

    // ls.stdout.on('data', (data) => {
    // console.log(`${data}`);
    // });

    // ls.stderr.on('data', (data) => {
    // console.log(`${data}`);
    // });
    res.writeHead(302, {
            'Location': '/auth.html'
            });
        res.end();
}