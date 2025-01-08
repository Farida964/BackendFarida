const Student = require("../models/Student");

class StudentController {
  async index(req, res) {
      const students = await Student.all();

      if(students.length > 0){
          const data = {
              message: "Menampilkan semua student",
              data: students, // Pastikan student hanya berisi objek yang konsisten
          };
          res.status(200).json(data);
      }else{
          const data = {
              message: "Data student kosong",
              data: students, // Pastikan student hanya berisi objek yang konsisten
          };
          res.status(200).json(data);
      }
  }



  async store(req, res) {
      /**
       * Validasi sederhana
       * - Handle jika salah satu data tidak dikirim
       */

      // Destructing object req.body
      const {nama, nim, email, jurusan} = req.body;

      //jika data underfined maka kirim response error
      if (!nama || !nim || !email || !jurusan) {
          const data = {
              message: "Semua data harus dikirim",
          };
          return res.status(422).json(data);
      }

      //else
      // memanggil method create dari model student
      const student = await Student.create(req.body);

      const data = {
          message: "Menambahkan data student",
          data: student,
      };

      return res.status(201).json(data);
  }
  


  async update(req, res) {
      const { id } = req.params;
      const { nama, nim, email, jurusan } = req.body;

      if (!nama || !nim || !email || !jurusan) {
          const data = {
              message: "Semua data harus dikirim",
          };
          return res.status(422).json(data);
      }

      const student = await Student.find(id);

      if (student) {
          const updatedStudent = await Student.update(id, req.body);
          const data = {
              message: "Mengedit data students",
              data: updatedStudent,
          };
          res.status(200).json(data);
      } else {
          const data = {
              message: "Student not found",
          };
          res.status(404).json(data);
      }
  }
      


  async destroy(req, res) {
      const { id } = req.params;

      if (!id) {
          const data = {
              message: "ID harus dikirim",
          };
          return res.status(422).json(data);
      }

      const student = await Student.find(id);

      if (student) {
          await Student.delete(id);
          const data = {
              message: "Menghapus data students",
          };
          res.status(200).json(data);
      } else {
          const data = {
              message: "Student not found",
          };
          res.status(404).json(data);
      }
  }



  async show(req, res) {
      const { id } = req.params;

      if (!id) {
          const data = {
              message: "ID harus dikirim",
          };
          return res.status(422).json(data);
      }

      const student = await Student.find(id);

      if (student) {
          const data = {
              message: "Menampilkan detail students",
              data: student,
          };
          res.status(200).json(data);
      } else {
          const data = {
              message: "Student not found",
          };
          res.status(404).json(data);
      }
  }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;
