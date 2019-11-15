
btnEnvoie.addEventListener('click',validate);
texteEcrit.addEventListener('click',cote)
function validate() {
    var $valid = true;
    var Firtname = document.getElementById("txtFirstName").value;
    var LastName = document.getElementById("txtLastName").value;
    var Password = document.getElementById("txtPwd").value;
    var ConfirmPwd = document.getElementById("txtConfirmPwd").value;
    var verif1 = document.getElementById("verif1").style;
    var verif2 = document.getElementById("verif2").style;
    var verif3 = document.getElementById("verif3").style;
    var verif4 = document.getElementById("verif4").style;

    if(Firtname.length < 5)
    {
        verif1.visibility = 'visible';
        $valid = false;
    }
    if(LastName.length < 5)
    {
        verif2.visibility = 'visible';
        $valid = false;
    }

    if( Password.length < 6 )
    {
        verif3.visibility = 'visible';
        $valid = false;
    }
    if( ConfirmPwd !== Password )
    {
        verif4.visibility = 'visible';
        $valid = false;
    }

    var check = document.getElementById('btnEnvoie');
    if($valid === true){
        verif1.style.display = "false";
        verif1.style.display = "false";
        verif1.style.display = "false";
        verif1.style.display = "false";
        document.location.href="motivation.html";
    }else {
        check.onsubmit = false;
    }
    return $valid;
}
function cote() {
    
}