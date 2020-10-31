const express= require ("express");
const https = require ("https");
const bodyParser = require("body-parser");

const app = express();
app.use(bodyParser.urlencoded({extended:true}));

app.get("/", function(req,res){
   res.sendFile(__dirname + "/index.html");
});

app.post("/", function (req,res){
    const query = req.body.NamaKota;
    const apiKey = "db49c81ad33b87097ece62673c4f0ecb";
    const unit = "metric";
    const url = "https://api.openweathermap.org/data/2.5/weather?q="+ query +"&appid=" + apiKey +"&units=" + unit;
    https.get(url, function (response){
        console.log(response);

        response.on("data", function (data){
            const weatherData = JSON.parse(data); // menginisialisasi data cuaca dijadikan objek pada java script
            const temp = weatherData.main.temp
            const deskripsicuaca = weatherData.weather[0].description
            const ikoncloud = weatherData.weather[0].icon
            const ikonurl = "http://openweathermap.org/img/wn/" + ikoncloud + "@2x.png"
            res.write("<p>Cuaca hari ini adalah " + deskripsicuaca + "</p>");
            res.write("<h1>The temperature in " + query + " is " + temp + " Degree Celcius</h1>");
            res.write("<img src="+ ikonurl +">");
            res.send()
        })
    });
})



app.listen(3000, function (){
    console.log("Server telah berhasil dirun di localhost:3000");
})