const inputNumber = document.getElementById("input"),
    inputNumberList = [],
    output = document.getElementById("output");
let total = 0;
function Averrage() {
    inputNumberList.push(inputNumber.value);
    console.log(inputNumberList);
    let ali = inputNumberList.reduce((a, b) => {
        a + b , 0;
    });
    let Averrage = ali / inputNumberList.length;
    console.log(Averrage);
    output.innerHTML = `<li>your averrage is : ${Averrage}</li>`;
}
