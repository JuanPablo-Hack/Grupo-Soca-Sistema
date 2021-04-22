function myFunction() {
    var x = document.getElementById("carretera").value;
    if (x == '2') {

        document.getElementById("carac_carretera").style.display = "inherit";
    } else {
        document.getElementById("carac_carretera").style.display = "none";
    }
}

function myFunction2() {
    var x = document.getElementById("hidraulico").value;
    if (x == '2') {

        document.getElementById("hidra").style.display = "inherit";
    } else {
        document.getElementById("hidra").style.display = "none";
    }
}

function myFunction3() {
    var x = document.getElementById("cuerpo").value;
    if (x == '2') {

        document.getElementById("cuerpo_dimensiones").style.display = "inherit";
    } else {
        document.getElementById("cuerpo_dimensiones").style.display = "none";
    }
}