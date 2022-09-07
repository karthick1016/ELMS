function userName() {
        var uname = document.getElementById('name').value;
        var uname_err = document.getElementById('nameerr');
        var pattern = /^([A-Za-z\s]){5,}$/;
        if(!pattern.test(uname)){
            uname_err.innerHTML = "Invalid Username";
            uname_err.style.color = "white";
            uname_err.style.backgroundColor = "red";
            uname_err.style.fontStyle = "italic";
            uname_err.style.fontWeight = "bold";
            uname_err.style.border = "2px solid black";
        }else{
            uname_err.style.display = "none";
        }
    }

    function checkEmail() {
            var uemail =  document.getElementById('email').value;
            var uemail_err = document.getElementById('emailerr');
            var emailPattern = /^([a-zA-Z0-9]){5,}@([a-z]){5}.(com)$/;
            if(!emailPattern.test(uemail)){
                uemail_err.innerHTML = "Invalid Email";
                uemail_err.style.backgroundColor = "red";
                uemail_err.style.color = "white";
                uemail_err.style.fontStyle = "italic"
                uemail_err.style.fontWeight = "bold";
                uemail_err.style.border = "2px solid black";
            }else{
                uemail_err.style.display = "none";
            }
        }

function checkPhone() {
    var uphone = document.getElementById('phone').value;
    var uphone_err = document.getElementById('numbererr');
    var phonePattern = /^([0-9]{10})$/;
    if(!phonePattern.test(uphone)){
        uphone_err.innerHTML = "Invalid Phonenumber";
        uphone_err.style.backgroundColor = "red";
        uphone_err.style.color = "white";
        uphone_err.style.fontStyle = "italic";
        uphone_err.style.fontWeight = "bold";
        uphone_err.style.border = "2px solid black";
    }else{
        uphone_err.style.display = "none";
    }
}

function password() {
    var upass = document.getElementById('password').value;
    var upass_err = document.getElementById('passworderr');
    var passPattern = /^([a-z0-9]){6,}$/;
    if(!passPattern.test(upass)){
        upass_err.innerHTML = "Invalid Password";
        upass_err.style.backgroundColor = "red";
        upass_err.style.color = "white";
        upass_err.style.fontStyle = "italic";
        upass_err.style.fontWeight = "bold";
        upass_err.style.border = "2px solid white";
    }else{
        upass_err.style.display = "none";
    }
}

var button = document.getElementById('btn');
button.addEventListener('click',function(event) {
    event.preventDefault();
    userName();
    checkEmail();
    checkPhone();
    password();
});