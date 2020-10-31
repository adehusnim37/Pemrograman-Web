//jshint esversion:6
/*
const fs = require("fs");

fs.copyFileSync("file1.txt", "file2.txt");*/

var superheroes = require("Superheroes");

var nama_pahlawan = superheroes.random();

console.log(nama_pahlawan);

var generator = require('generate-serial-number');
var serialNumber = generator.generate(10);
console.log(serialNumber);// '8380289275'
