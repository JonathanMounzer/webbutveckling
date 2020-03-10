function ValidateForm() {

    var hasError = false;

    if (document.getElementById('fname').value == "") {
        document.getElementById('wrongFname').style.display = "inline";
        hasError = true;
    } else {
        document.getElementById('wrongFname').style.display = "none";
    }

    if (document.getElementById('lname').value == "") {
        document.getElementById('wrongLname').style.display = "inline";
        hasError = true;
    } else {
        document.getElementById('wrongLname').style.display = "none";

    }
    if(hasError == true){
        document.getElementById('requestFail').style.display = "inline";
    }
    else{
      document.getElementById('requestSent').style.display = "inline";
    }

    return !hasError;
}
