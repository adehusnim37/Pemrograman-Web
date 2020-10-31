const express = require("express");
const bodyParser = require("body-parser");
const request = require("request");
const https = require("https");

const app = express();

app.use(express.static("public"));
app.use(bodyParser.urlencoded({extended: true}));

app.get("/", function(req, res){
    res.sendFile(__dirname + "/signup.html");
});

app.post("/", function(req, res){

    // Make sure you recieve the the data from your form correctly by console l
    // logging the const values.

    const firstName = req.body.fname;
    const lastName = req.body.lname;
    const email = req.body.email;



    // This is crucial and make sure your keys match the ones in mail chimp
    // To make sure go to to audiece dashboard, then settings and Audience fiel
    // ds and *|MERGE|* tags.

    var data = {
        members:[ {
            email_address: email,
            status: "subscribed",
            merge_fields: {
                FNAME: firstName,  //if you change it in mailchimp change it here
                LNAME: lastName
            }
        }]
    };

    var jsondata = JSON.stringify(data);

    //Enter your list ID correcly else you will get errors like email cannot be
    //blank.
    //replace us8 with your server eg us4 or us6
    const url = `https://us2.api.mailchimp.com/3.0/lists/b701b4e776`;

    const options = {
        method: "POST",
        body: data,
        auth: "adehusni:529e936b6cb4eb0f5f12467dc9944249-us2"
    };

    const request = https.request(url, options, function(response){

        if (response.statusCode === 200){
            res.sendFile(__dirname + "/success.html")
        } else {
            res.sendFile(__dirname + "/failed.html")
        }

        response.on("data", function(data){
            console.log(JSON.parse(data));
        });

    });

    request.write(jsondata);
    request.end();


});

app.post("/failed", function (req,res){
    res.redirect("/");
})

app.listen(process.env.PORT || 3000, function(){
    console.log("You are now live");
});

//529e936b6cb4eb0f5f12467dc9944249-us2

//uniqueid b701b4e776