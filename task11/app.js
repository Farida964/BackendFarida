// import express dan routing
const express = require("express");
const router = require("./routes/api.js");

// Membuat object express
const app = express();

// Menggunakan middleware
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Menggunakan routing (router)
app.use(router);

// Mendefinisikan port.
app.listen(3000, () => {
  console.log("Server is running on http://localhost:3000");
});
