const fruits = require("./fruits.js");

const index = () => {
    for (const fruit of fruits) {
        console.log(fruit);
    }
};

const store = (name) => {
   fruits.push("Pisang");
//    index();
    for (const fruit of fruits) {
        console.log(fruit);
}
};

const update = (position, name) => {
        fruits[position] = name;
        for (const fruit of fruits) {
            console.log(fruit);
        }

};

const destroy = (position) => {
    fruits.splice(position, 1);
        for (const fruit of fruits) {
            console.log(fruit);
        }

};

module.exports = {index, store, update, destroy}; 
