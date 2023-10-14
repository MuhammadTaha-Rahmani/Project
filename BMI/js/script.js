const weight = document.getElementById("input_weight"),
    height = document.getElementById("input_height"),
    output = document.getElementById("output");
let bmi;
function BMI() {
    bmi = weight.value / height.value ** 2;
    output.innerHTML = bmi
    weight.value = ""
    height.value = ""
}
