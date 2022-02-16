var nameerror = document.getElementById('name-error');
var passworderror = document.getElementById('password-error');
var emailerror = document.getElementById('email-error');

function validateName(){
    var name = document.getElementById('contact-name').value;
    if(name.length == 0){
        nameerror.innerHTML = 'name is required';
        return false;
    }
    else if(name.length < 4){
            nameerror.innerHTML = 'name is too short';  
            return false;

}
    nameerror.innerHTML = '<i class="fas fa-check-circle" style="font-size:20px" ></i>';
    return true;
}

function validatePassword(){
    var pass = document.getElementById('contact-password').value;
    if(pass.length == 0){
        passworderror.innerHTML = 'Password is required';
        return false;
    }
    else if(pass.length < 5){
        passworderror.innerHTML = 'Password is too short';  
            return false;

}
    passworderror.innerHTML = '<i class="fas fa-check-circle" style="font-size:20px" ></i>';
    return true;
}


function validateEmail(){
    var email = document.getElementById('contact-email').value;
    if(email.length == 0){
        emailerror.innerHTML = 'Email is required';
        return false;
    }
     if(!email.match (/^\S+@\S+\.\S+$/)){
        emailerror.innerHTML = 'Email is invalid';  
            return false;

}
    emailerror.innerHTML = '<i class="fas fa-check-circle" style="font-size:20px" ></i>';
    return true;
}


