const persiapan = () => {
    return new Promise((resolve) => {
      setTimeout(() => {
        console.log("Persiapan...");
        resolve(); // Menandakan proses selesai
      }, 3000); // Proses ini selesai dalam 3 detik
    });
  };
  
  const rebusAir = () => {
    return new Promise((resolve) => {
      setTimeout(() => {
        console.log("Rebus Air...");
        resolve(); // Menandakan proses selesai
      }, 7000); // Proses ini selesai dalam 7 detik
    });
  };
  
  const masak = () => {
    return new Promise((resolve) => {
      setTimeout(() => {
        console.log("Memasak Mie...");
        console.log("Selesai");
        resolve(); // Menandakan proses selesai
      }, 5000); // Proses ini selesai dalam 5 detik
    });
  };

  
//   const main = () => {
//     persiapan()
//       .then(() => {
//         return rebusAir(); // Memanggil rebusAir setelah persiapan selesai
//       })
//       .then(() => {
//         return masak(); // Memanggil masak setelah rebusAir selesai
//       })
//       .catch((error) => {
//         console.error("Terjadi kesalahan:", error); // Menangani error jika ada
//       });
//   };
  
//   main();

const main = async () => {
    console.log(await persiapan());
    console.log(await rebusAir());
    console.log(await masak());
}

main();

  