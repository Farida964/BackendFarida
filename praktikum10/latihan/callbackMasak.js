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