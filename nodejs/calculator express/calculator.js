//jshint esversion:6

const express = require("express");
const bodyParser = require("body-parser");

const app = express();
app.use(bodyParser.urlencoded({extended : true}))

app.get('/', function(req,res){
    res.sendFile(__dirname + "/calculator.html");
})

app.post("/", function (req,res){
    var num1 = Number(req.body.num1);
    var num2 = Number(req.body.num2);

    var result =  num1 + num2;
    res.send("Hasilnya adalah = " + result);
})

app.get("/bmiCalc", function (req,res){
  res.sendFile(__dirname + "/bmiCalc.html")
})

app.post("/bmiCalc", function (req,res){
    var weight = parseFloat(req.body.weight);
    var height = parseFloat(req.body.height);

    var resultbmi = weight / (height * height);

    res.send("Hasilnya adalah = " + resultbmi);
})

app.listen(3000,function (){
    console.log("Server Is running on port 3000");
})