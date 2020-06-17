function validateForm() {
    var newPassword = document.forms["myForm"]["newPassword"].value;
    var confipassword = document.forms["myForm"]["confipassword"].value;
    var myElem = document.getElementById('errorNewPassword');
    var myElem1 = document.getElementById('confipassword');
    if (newPassword.length <= '6') {
        var text = myElem.innerText;
        if (text == '') {
            $("#errorNewPassword").append("Please enter 6 or more characters");
        }
        return false;
    } else {
        document.getElementById('errorNewPassword').hidden = true;
    }
     if (newPassword !== confipassword) {
         var text1 = myElem1.innerText;
         if (text1 == '') {
             $("#confipassword").append("Please make sure your passwords match.");
         }
         return false;
     }
     else {
         document.getElementById('confipassword').hidden = true;
     }
}
