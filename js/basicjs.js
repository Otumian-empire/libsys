function show_password() {
    var show_pass = document.getElementById("si_password");
    if (show_pass.type === 'password') {
        show_pass.type = "text";
    } else {
        show_pass.type = "password";
    }   
}
