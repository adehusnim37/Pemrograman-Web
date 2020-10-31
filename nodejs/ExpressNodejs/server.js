//jshint esversion:6

const express = require('express');
const app = express();
const port = 3000

app.get('/',(req, res) => {
    res.send("<h1>Hello World!</h1>");
})

app.get("/contact", function (req,res){
    res.send("Conctact me at : admin@perdanasarjana.com");
})

app.get("/homepage", function (require, res){
    res.send("ini adalah page pertama saya")
})

app.get("/homepage2", function (require, res){
    res.send("ini adalah page pertama saya")
})

app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`);
})