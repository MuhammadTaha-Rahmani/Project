const firstname = document.getElementById("finame"),
lastname = document.getElementById("laname"),
codemeli = document.getElementById("com"),
fathname = document.getElementById("faname"),
bt = document.getElementById("bt"),
out = document.getElementById("output")
const list = [];
let text = "";
function run(){
    const reg = {
        FirstName:firstname.value ,
        LastName:lastname.value ,
        Abc: codemeli.value,
        FatherName:fathname.value,
    };
    list.push(reg);
    text+= "<li> "+ reg.FirstName + "<br>" + reg.LastName + "<br>" + reg.Abc + "<br>" + reg.FatherName + "<br>" + "</li>" + "<hr>";
    output.innerHTML = text;
}
bt.addEventListener("click", () => {
    if (firstname.value !== "") {
        if (lastname.value !== "") {
            if (codemeli.value !== "") {
                if (fathname.value !== "") {
                    run();
                } else {
                    alert("please fill out the father name input")
                }
            } else {
                alert("please fill out the code meli input")
            }
        } else {
            alert("please fill out the last name input")
        }
    } else {
        alert("please fill out the fist name input")
    }
});

