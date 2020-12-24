//jshint esversion6

const mongoose = require('mongoose');
mongoose.connect("mongodb://localhost:27017/percobaanDB", {useNewUrlParser: true, useUnifiedTopology: true})

const detaillicenseSchema =  new mongoose.Schema({
    idlicense: Number,
    licensekey: String,
    licensetype: String,
    device: Number,
    availabledevice: Number
})

const license = mongoose.model("detailicense", detaillicenseSchema)

const pro= new license({
    idlicense: 5214327221453943724888385583,
    licensekey: "QOW1-22WNNQ-11244N-ASDLKNDSA-QWQQWRS-SASAS-S",
    licensetype: "Free Professional",
    device: 2,
    availabledevice: 1
})

const education1 = new license({
    idlicense: 55612261751852399217378585617,
    licensekey: "POWS-IIEUABCMLD-QWKBJKSD-XZCZXNJKAB-ASDASD",
    licensetype: "Education",
    device: 2,
    availabledevice: 2
})

const education2 = new license({
    idlicense: 5512787382873624973517581245,
    licensekey: "QOW1E-HASDY-DMNCX-QQWRS-C0M3C",
    licensetype: "Education (WITH COMMERCIAL ACCESS)",
    device: 10,
    availabledevice: 8
})

const free = new license({
    idlicense: 1001733775336687532212919368,
    licensekey: "RH50-J1TL-Y2EQ-R39A-FP88-9VRB",
    licensetype: "Free License",
    device: 1,
    availabledevice: 0
})

const commercial = new license({
    idlicense: 5334512818674437458636571535,
    licensekey: "RH50-GBT6-BA5Q-3F9X-2593-0U3P",
    licensetype: "Commercial License",
    device: 4,
    availabledevice: 4
})

// addlisensi.save()

// license.insertMany([education1,education2,pro,free,commercial], function (err){
//     if (err) {
//         console.log("salah memasukkan data license")
//     }else {
//         console.log("berhasil memasukkan detail lisensi")
//     }
// })


const usersSchema = new mongoose.Schema({
    _id: Number,
    email: {
        type: String,
        required: [true, "waduh emailmu dibuat untuk validasi lisensinya ya"]
    },
    name: String,
    password: String,
    username: String,
    licenseown: detaillicenseSchema
})

const users = mongoose.model("users", usersSchema)

const Users = new users ({
    _id: 6,
    email: "admin@owarinoseraph.co",
    name: "Pt Owari No Seraph Indonesian",
    password: "noneedit",
    username: "seraphnoid"

})

// Users.save()



users.updateOne({_id:"5"},{licenseown: commercial},function (err){
    if (err){
        console.log("error")
    }else
        console.log("datamu sudah diperbarui ya")
})

license.find(function (err,licenses){
    if (err){
        console.log("salah memasuukan format")
    }else{
        mongoose.connection.close
        console.log("mencari lisensi")

        licenses.forEach(function (license){
            console.log(license.licensekey)
            console.log(license.licensetype)
        })
    }
})