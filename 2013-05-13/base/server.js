var fs = require('fs');
var restify = require("restify");
var http = require('https');
var server = restify.createServer();
var baseDir = '/Users/atrophic/Projects/codedojo/2013-05-13/base';
var baseRemoteDir = 'https://api.whitehouse.gov/v1';
var baseRemoteHostname = 'api.whitehouse.gov';
var baseRemotePath = '/v1';
 
var respond = function(req, res, next) {
    res.send("Hello " + req.params.name);
};

var getPetitions = function(req, res, next) {
	console.log('pre-sending file contents');
	var fileContents = fs.readFileSync(baseDir + '/petitions/list.js').toString();
	console.log('sending file contents');
	res.send(fileContents);
};

var getPetitionsRemote = function(req, res, next) {
	http.request({
		hostname: baseRemoteHostname,
		path: baseRemotePath + '/petitions.json',
		port: 443,
		method: 'GET' 
	}, function(result) {
		console.log(result);
		result.on('data', function(chunk) {
			console.log('CHUNK: ' + chunk);
			res.write(chunk);
			res.end();
		});

	}).on('error', function(e) {
		res.send(403);
		return next();
	});
};

var getDetails = function(req, res, next) {
	if (req.params.id !== '518bcd94c988d43341000002')
	{
		res.send(404);
		return next();
	}
	
	var fileContents = fs.readFileSync(baseDir + '/petitions/518bcd94c988d43341000002/details.js').toString();
	res.send(fileContents);
};

var getSignatures = function(req, res, next) {
	if (req.params.id !== '518bcd94c988d43341000002')
	{
		res.send(404);
		return next();
	}
	
	var fileContents = fs.readFileSync(baseDir + '/petitions/518bcd94c988d43341000002/signatures/list.js').toString();
	res.send(fileContents);
};

server.pre(restify.pre.sanitizePath());
server.use(restify.queryParser());

server.get("/hello/:name", respond);

server.get('/petitions', getPetitions);
server.get('/petitions/', getPetitions);
server.get('/petitions/list.js', getPetitions);

server.get('/petitions/:id', getDetails);
server.get('/petitions/:id/', getDetails);
server.get('/petitions/:id/details.js', getDetails);

server.get('/petitions/:id/signatures', getSignatures);
server.get('/petitions/:id/signatures/', getSignatures);
server.get('/petitions/:id/signatures/list.js', getSignatures);
 
server.listen(8080, function () {
	console.log("%s listening at %s", server.name, server.url);
})

