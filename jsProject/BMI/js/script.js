const weight = document.getElementById("input_weight"),
    height = document.getElementById("input_height"),
    output = document.getElementById("output");
let bmi;
function BMI() {
    bmi = weight.value / height.value ** 2;
    output.innerHTML = bmi
    if(bmi < 18.5){
        output.innerHTML = bmi +"<br>"+" You are " + "Under Weight"
    }
    else if (bmi < 25){
        output.innerHTML = bmi + "<br>" + "Healthy Weight"
    }
    weight.value = ""
    height.value = ""
}
