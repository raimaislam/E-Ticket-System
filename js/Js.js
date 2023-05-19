function RegValid()
{
     if(checkFirstName()==false || checkLastName()==false || checkPhone()==false || checkDOB()==false || checkEmail()==false|| checkPassword()==false)
     {
        return false;
     }
     else{
        return true;
     }
}
function homeValidation(){
    if(checkFrom()==false || checkTo()==false || checkDate()==false)
    {
        return false;
    }
    else{
        return true;
    }
}
function checkFrom(){
    var from=document.getElementById('from').value;
    if(from=='')
    {
        document.getElementById("fromerror").innerHTML="*Please insert your Source";
        return false;
    }
    else if(from.match(/^[a-zA-Z]+ [a-zA-Z]+$/))
    {
        document.getElementById("fromerror").innerHTML="*It can contain only letters";
        return false;

    }
    else{
        return true;
    }

}
function checkTo(){
    var to=document.getElementById('to').value;
    if(to=='')
    {
        document.getElementById("toerror").innerHTML="*Please insert your destination";
        return false;
    }
    else if(to.match(/^[a-zA-Z]+ [a-zA-Z]+$/))
    {
        document.getElementById("toerror").innerHTML="*It can contain only letters";
        return false;

    }
    else{
        return true;
    }
    
}
function checkDate(){
    var Date=document.getElementById('date').value;
    if(Date=="")
    {
        document.getElementById("dateerror").innerHTML="*Please insert your date";
        return false;
    }
    else{
        return true;
    }

}
function checkFirstName()
{
    var fname=document.getElementById('fname').value;
    if(fname=='')
    {
        document.getElementById("fnerror").innerHTML="*Please insert your first name";
        return false;
    }
    else if(fname.match(/^[a-zA-Z]+ [a-zA-Z]+$/))
    {
        document.getElementById("ferror").innerHTML="*Your name can contain only letters";
        return false;

    }
    else{
        return true;
    }
 
}
function checkLastName()
{
    var lname=document.getElementById('lname').value;
    if(lname=='')
    {
        document.getElementById("lnerror").innerHTML="*Please insert your last name";
        return false;
    }
    else if(lname.match(/^[a-zA-Z]+ [a-zA-Z]+$/))
    {
        document.getElementById("lerror").innerHTML="*Your name can contain only letters";
        return false;

    }
    else{
        return true;
    }
}
function checkPhone()
{
    var phone=document.getElementById('phone').value;
    if(phone=='')
    {
        document.getElementById("perror").innerHTML="*Please insert your phone number";
        return false;
    }
    else if(phone.length<11 || phone.length>11)
    {
        document.getElementById("perror").innerHTML="*Please insert valid phone number";
        return false;
    }
    else{
        return true;
    }
}
function checkDOB()
{
    var DoB=document.getElementById('dob').value;
    if(DoB=="")
    {
        document.getElementById("derror").innerHTML="*Please insert your date of birth";
        return false;
    }
    else{
        return true;
    }
}
function checkEmail()
{
    email=document.getElementById('email').value;
    if(email=='')
    {
        document.getElementById("emerror").innerHTML="*This field is required";
        return false;
    }
    else if(email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.w{2,3})+$/))
    {
        document.getElementById("emerror").innerHTML="*Email must be properly formatted";
        return false;

    }
    return true;
}
function checkPassword()
{
    pass=document.getElementById('password').value;
    confirmpass=document.getElementById('Cpassword').value;
    if(pass=='' || confirmpass=='')
    {
        document.getElementById("passerror").innerHTML="Please insert your password ";
        return false;
    }
    else if(pass.length<4)
    {
        document.getElementById("passerror").innerHTML="*Your password should have atleast 4 characters";
        return false;
    }
    else if(pass!=confirmpass)
    {
        document.getElementById("passerror").innerHTML="*Your passwords didnt matched ";
        return false;
    }
    
    return true;
}
function LoginValid()
{
     if(checkPhone()==false || checkPassword()==false)
     {
        return false;
     }
     else{
        return true;
     }
}
function searchdetails(){

     var train=document.getElementById("details").value;
    
     var xttp=new XMLHttpRequest();
    
     xttp.onreadystatechange=function(){
    
     if(this.readyState==4 && this.status==200)
    
    {
    
     document.getElementById("display").innerHTML=this.responseText;
    
    }
    
     }
    
    xttp.open("POST", "http://localhost/folder/control/SearchTrainCheck.php", true);
    
    xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    xttp.send("train="+train);
    
    }


