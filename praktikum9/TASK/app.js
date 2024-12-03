const {index, store, update, destroy} = require("./FruitsController");

const main =() => {
    index();
    store("Pisang");
    update(0,"Kelapa");
    destroy(0);
};

main();