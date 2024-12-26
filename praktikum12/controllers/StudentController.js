const Student = require("../models/Student");

class StudentController {
  // Mendapatkan seluruh resource
 // Menampilkan semua students
async index(req, res) {
    const students = await Student.all();

    const data = {
      message: "Menampilkan semua students",
      data: students,
    };

    res.status(200).json(data);

    res.status(500).json({
      message: "Gagal mengambil data students",
      error: error.message,
    });
}

// Menambahkan data student
async store(req, res) {

    const { nama, nim, email, jurusan } = req.body;

    const students = await Student.create({ nama, nim, email, jurusan });

    const data = {
      message: `Menambahkan data mahasiswa: ${students.nama}`,
      data: students,
    };

    res.status(201).json(data); // 201 Created

    res.status(500).json({
      message: "Gagal menambahkan data mahasiswa",
      error: error.message,
    });

}


  // Update data student (belum diimplementasikan)
  update(req, res) {
    const { id } = req.params;
      const { nama } = req.body;

      students[1] = nama;
      const data = {
        message: `Mengedit student id ${id}, nama ${nama}`,
        data: students,
      };
      res.json(data);
  }

  // Hapus data student (belum diimplementasikan)
  destroy(req, res) {
      const { id } = req.params;

      students.splice(id,1);
      const data = {
        message:`Menghapus student id ${id}`,
        data: students,
      };
      res.json(data);
  }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;
