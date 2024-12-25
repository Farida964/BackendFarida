// Import Student Controller
const StudentController = require("../controllers/StudentController");

const express = require("express");
const router = express.Router();

router.get("/", (req, res) => {
  res.send("Hello Express");
});

// app.get("/students", (req,res) => {
//   res.send("Menampilkan semua students");
// });

router.get("/students", StudentController.index);
router.post("/students", StudentController.store);
router.put("/students/:id", StudentController.update);
router.delete("/students/:id", StudentController.destroy);

// Export router
module.exports = router;
// app.listen(4000, () => {
//     console.log("server running at http://localgost:3000");
// });