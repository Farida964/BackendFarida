//import express
const express = require("express");
// const router = require("./routes/api.json")
// const router = express("./routes/api.json");

const app = express();

app.use(express.json());
// app.use(express.urlencoded());

// app.use(router);

// app.listen(3000);

// route.get("/", (req, res) => {
//     res.send("hello world");
// });

// route.put("/: id", (req, res) => {
//     res 
//     .status(201)
//     .json({
//         message: `Updating the user with id : ${req.params.id} with the data: ${req.body}`
//     });
// });

app.listen(4000, () => {
    console.log("server running at http://localgost:3000");
});

app.get("/students", (req,res) => {
    res.send("Menampilkan semua students");
});