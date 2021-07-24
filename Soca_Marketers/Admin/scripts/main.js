function myFunction() {
    var x = document.getElementById("carretera").value;
    if (x == '2') {

        document.getElementById("nombre_extractor").style.display = "inherit";
    } else {
        document.getElementById("nombre_extractor").style.display = "none";
    }
}