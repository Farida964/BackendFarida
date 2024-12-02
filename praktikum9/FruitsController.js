const fruits = require("./fruits.js");

const index = () => {
    console.log("- Menampilkan Buah");
    for (const fruit of fruits) {
        console.log(fruit);
    }
};

const store = (name) => {
    console.log("- Menambahkan Buah Pisang");
   fruits.push("Pisang");
//    index();
    for (const fruit of fruits) {
        console.log(fruit);
}
};

const update = (position, name) => {
        fruits[position] = name;
        console.log("- Update data 0 menjadi Kelapa");
        for (const fruit of fruits) {
            console.log(fruit);
        }

};

const destroy = (position) => {
    fruits.splice(position, 1);
    console.log("- Menghapus data 0");
        for (const fruit of fruits) {
            console.log(fruit);
        }

};

module.exports = {index, store, update, destroy}; 
