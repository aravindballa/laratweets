
$( document ).ready(function() {
    // Server
    var io1 = require('socket.io').listen(8321);

    io1.on('connection', function(socket1) {
        socket1.on('new', function(msg1) {
            console.log(msg1);
        });
    });

    // // Mirror
    // var ioIn = require('socket.io').listen(8123);
    // var ioOut = require('socket.io-client');
    // var socketOut = ioOut.connect('http://localhost:8321');


    // ioIn.on('connection', function(socketIn) {
    // socketIn.on('foo', function(msg) {
    //     socketOut.emit('bar', msg);
    // });
    // });

    // Client
    var io2 = require('socket.io-client');
    var socket2 = io2.connect('http://localhost:8321');

    var msg2 = "hello";
    socket2.emit('new', msg2);
});