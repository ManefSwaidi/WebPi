function verif() {
    var depart = document.forms["formvoy"]["depart"].value;
    var errorN = document.getElementById('errorNR');
       
        if (depart == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";

    }else {
        errorActivities.innerHTML = "";

    }

       }


    function validateForm(e) {
    e.preventDefault();
    verif();
}

