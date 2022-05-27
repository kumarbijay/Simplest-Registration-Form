function valuser()
{
    var first=document.reg.first.value; //var first = document.getElementByName('first');
    var last=document.reg.last.value;
    var email=document.reg.email.value;
    var gender=document.reg.gender.value;
    var date=document.reg.date.value;
    var username=document.reg.username.value;
    var password_1=document.reg.password_1.value;
    var password_2=document.reg.password_2.value;
    var check=document.reg.check.checked; //for radio same as above

    if(!first){
        alert('Enter your First Name!');
        return false;
    }
    else if(!last){
        alert('Enter your Last Name!');
        return false;
    }
    else if(!email){
        alert('Enter your Email!');
        return false;
    }
    else if(!gender){
        alert('Enter your Gender!');
        return false;
    }
    else if(!date){
        alert('Enter your DOB!');
        return false;
    }
    else if(!username){
        alert('Enter your Username!');
        return false;
    }
    else if(!password_1){
        alert('Enter your Password!');
        return false;
    }
    else if(!password_2){
        alert('Enter your Confirm Password!');
        return false;
    }
    else if(password_1 != password_2){
        alert('Two password does not match!');
        return false;
    }
    else if(!check){
        alert('You must agree to T&C and Privacy Policy!');
        return false;
    }
    else{
        return true;
    }
}