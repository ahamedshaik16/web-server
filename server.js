var express = require('express');

var app = express();
// var PORT = 3000;

var PORT = process.env.PORT || 3000;

// app.get('/', function (req, res) {
// 	res.send('Hello Express!');
// });

var middleware = require('./middleware.js');

app.use(middleware.logger);
// app.use(middleware.requireAuthentication);

app.get('/about', middleware.requireAuthentication, function (req, res) {
	res.send('We are in about us page');
});

app.use(express.static(__dirname + '/sp'));
// console.log(__dirname);
app.use(express.static(__dirname + '/public'));
app.listen(PORT, function () {
	console.log('Express server started....! with port number ' + PORT );
});