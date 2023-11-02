const FName = document.querySelector("#firstname"),
    LName = document.getElementById("lastname"),
    Car = document.querySelector("#car"),
    Code = document.getElementById("code"),
    Btn = document.getElementById("button"),
    OutPut = document.getElementById("output");
const List = [];
let Text = "";
function run() {
    const reg = {
        FirstName: FName.value,
        LastName: LName.value,
        abc: Code.value,
        C: Car.value,
    };
    List.push(reg);
    // console.log(List);
    Text += "<li>" + reg.FirstName + reg.LastName + reg.C + reg.abc + "</li>";
    OutPut.innerHTML = Text;
}
Btn.addEventListener("click", () => {
    if (FName.value !== "") {
        if (LName.value !== "") {
            if (Car.value !== "") {
                if (Code.value !== "") {
                    run();
                } else {
                    Code.placeholder = "*fill out this form";
                }
            } else {
                Car.placeholder = "*fill out this form";
            }
        } else {
            LName.placeholder = "*fill out this form";
        }
    } else {
        FName.placeholder = "*fill out this form";
    }
});
