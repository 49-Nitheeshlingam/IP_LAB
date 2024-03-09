
function validate() {
    var id = document.getElementById("Empid").value;
    var idp = /^E00[0-9]{3}$/;
    if (idp.test(id)) {
        document.getElementById("l1").style.visibility = "visible";
        document.getElementById("l1").innerHTML = "valid";
    }
    else {
        document.getElementById("l1").style.visibility = "visible";
        document.getElementById("l1").innerHTML = "invalid";
    }
    var name = document.getElementById("Empname").value;
    var namep = /[A-Z]\s[A-Z]{1}[a-z\s]+$/;
    if (namep.test(name)) {
        document.getElementById("l2").style.visibility = "visible";
        document.getElementById("l2").innerHTML = "valid";
    }
    else {
        document.getElementById("l2").style.visibility = "visible";
        document.getElementById("l2").innerHTML = "invalid";
    }
    var dob = document.getElementById("dob").value;
    var dobp = /[0-9]{2}\/[0-9]{2}\/[0-9]{4}/;
    if (dobp.test(dob)) {
        document.getElementById("l3").style.visibility = "visible";
        document.getElementById("l3").innerHTML = "valid";
    }
    else {
        document.getElementById("l3").style.visibility = "visible";
        document.getElementById("l3").innerHTML = "invalid";
    }
    var radios = document.querySelectorAll('input[name="r1"]');
    var flag = true;
    
    for (var radio of radios) {
      if (radio.checked) {
        flag = false;
        break; 
      }
    }
    
    if (flag) {
      document.getElementById("l4").style.visibility = "visible";
      document.getElementById("l4").innerHTML = "Select any gender";
    } else {
      document.getElementById("l4").style.visibility = "hidden";
    }
    var age = document.getElementById("age").value;
    var agep =  /^[1-9][0-9]*$/;
    if (agep.test(age)) {
        document.getElementById("l5").style.visibility = "visible";
        document.getElementById("l5").innerHTML = "valid";
    }
    else {
        document.getElementById("l5").style.visibility = "visible";
        document.getElementById("l5").innerHTML = "invalid";
    }
    var qualify = document.getElementById("qualify");

    if (qualify.value === "") {
        document.getElementById("qual").innerHTML = "Select any option";
    }
    var mobno = document.getElementById("mobno").value;
    var mobnop = /^[6-9]{1}[0-9]{9}$/;

    if (mobnop.test(mobno)) {
        document.getElementById("l6").style.visibility = "visible";
        document.getElementById("l6").innerHTML = "Valid";
    } else {
        document.getElementById("l6").style.visibility = "visible";
        document.getElementById("l6").innerHTML = "Invalid";
    }
    var exp = document.getElementById("exp").value;
    var expp = /^[0-9]{2}$/;

    if (expp.test(exp)) {
        document.getElementById("l8").style.visibility = "visible";
        document.getElementById("l8").innerHTML = "Valid";
    } else {
        document.getElementById("l8").style.visibility = "visible";
        document.getElementById("l8").innerHTML = "Invalid";
    }


}
