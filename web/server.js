var connect = require('connect');
var serverStatic = require('server-static');
connect().use(serverStatic(__dirname)).listen(8080, function(){
	console.log('Server running on 8080...');
});