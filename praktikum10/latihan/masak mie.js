const persiapan = () => {
    setTimeout(function () {
        console.log("Mmpersiapkan bahan...");
    }, 3000);
};

const rebusAir = () => {
    setTimeout(function () {
        console.log("Merebus air...");
    }, 7000);
};

const masak = () => {
    setTimeout(function () {
        console.log("Masak mie...");
        console.log("Selesai");
    }, 5000);
};


const main = () => {
    setTimeout(() => {
      persiapan();
      setTimeout(() => {
        rebusAir();
        setTimeout(() => {
          masak();
        }, 5000);
      }, 7000);
  },3000);
  };

  main();