document.getElementById("signup-form").onsubmit = validate;

function validate() {
    clearErrors();

    //flag variable to track if form is valid
    let valid = true;

    //validate first name
    let first = document.getElementById("first").value;

    //alert("you typed: " + first);
    if (first == "") {
        document.getElementsByClassName("err").style.display = "block";
        valid = false; //forces to-stay on the same page
    }

    //validate last name
    let last = document.getElementById("last").value;
    if (last == "") {
        document.getElementsByClassName("err").style.display = "block";
        valid = false; // forces to-stay on the same page
    }

    //validate phone number
    let phone = document.getElementById("phoneNumber").value;
    if(phone == ""){
        document.getElementsByClassName("err").style.display = "block";
        valid = false; // forces to-stay on the same page
    }

    //validate city
    let city = document.getElementById("city").value;
    if(city == ""){
        document.getElementsByClassName("err").style.display = "block";
        valid = false; // forces to-stay on the same page
    }
    //validate city
    let email = document.getElementById("email").value;
    if(city == ""){
        document.getElementsByClassName("err").style.display = "block";
        valid = false; // forces to-stay on the same page
    }

}
//function clear errors
function clearErrors()
{
    let errors = document.getElementsByClassName("err");
    for(let i = 0; i < errors.length; i ++)
    {
        error[i].style.display = "none";
    }
}