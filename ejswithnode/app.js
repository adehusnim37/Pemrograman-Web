//jshint esversion:6

const express = require("express");
const bodyParser = require("body-parser");

const app = express();

let items = [];
let workitems = [];

app.set('view engine', 'ejs');
app.use(bodyParser.urlencoded({extended: true}));
app.use(express.static("public"));

app.get("/", function (req,res){
    let today = new Date();
    let item = req.body.newItem;
    let opsi ={
        weekday : 'long', day : 'numeric'
    };
    let hari = today.toLocaleDateString("id-ID", opsi);

    res.render("list",{hariniadalah: hari, listitemshows: items});
});

app.post("/", function (req,res){
    console.log(req.body);
    let item = req.body.additem;

    if(req.body.list === "work"){
        workitems.push(item);
        res.redirect("/work");
    }else {
        items.push(item);
        res.redirect("/");
    }
})

app.get("/work", function(req,res){
    res.render("list",{hariniadalah: "work list", listitemshows: workitems});
});

app.post("/work", function (req,res){
   let item = req.body.newItem;
   workitems.push(item)
    res.redirect("/work")
});

app.get("/about", function (req,res){
    res.render("about");
})

app.post("/about", function (req,res){
    res.redirect("/about")
})
app.listen(3000, function (){
    console.log("server bergerak");
});