// TODO 3: Import data students dari folder data/students.js
// code here

// Membuat Class StudentController
class StudentController {
    index(req, res) {
      const data = {
        message:"Menampilkan semua students", 
        data: [],
      };
      // TODO 4: Tampilkan data students
      // code here
      res.json(data);
    };
  
    store(req, res) {
      const {} = req.body;

      const data = {
        message: `Menambahkan data student: ${nama}`,
        data: [],
      };
      // TODO 5: Tambahkan data students
      // code here
      res.json(data);
    }
  
    update(req, res) {
      const {id} = req.params;
      const {nama} = req.body;

      const data = {
        message: `Mengedit student id ${is}, nama ${nama}`,
        data: [],
      };
      // TODO 6: Update data students
      // code here
      res.json(data);
    }
  
    destroy(req, res) {
      const {id} = req.params;

      const data = {
        message: `Menghapus student id ${id}`,
        data: [],
      };
      // TODO 7: Hapus data students
      // code here
      res.json(data);
    }
  }
  
  // Membuat object StudentController
  const object = new StudentController();
  
  // Export object StudentController
  module.exports = object;