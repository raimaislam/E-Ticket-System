function regValidation()
{
     if(checkName()==false || checkPhone()==false || checkEmail()==false || checkAddress()==false || checkPassword()==false || checkGender()==false || checkDob()==false || checkFile()==false )
     {
        return false;
     }
     else{
        return true;
     }
}
function accValidation()
{
     if(checkName()==false || checkPhone()==false || checkAddress()==false || checkDob()==false || checkPass()==false)
     {
        return false;
     }
     else{
        return true;
     }
}
function checkName()
{
    ename=document.getElementById('empname').value;
    if(ename=='')
    {
        document.getElementById("nameerror").innerHTML="*This field is required";
        return false;
    }
    else if(ename.match(/^\d+$/))
    {
        document.getElementById("nameerror").innerHTML="*Your name can not be a number";
        return false;

    }
    return true;
}
function checkEmail()
{
    eemail=document.getElementById('empemail').value;
    var chk = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(eemail=='')
    {
        document.getElementById("emailerror").innerHTML="*This field is required";
        return false;
    }
    else if(!eemail.match(chk))
    {
        document.getElementById("emailerror").innerHTML="*Email must be properly formatted";
        return false;

    }
    return true;
}
function checkPhone()
{
    ephone=document.getElementById('empphone').value;
    
    if(ephone=='')
    {
        document.getElementById("phoneerror").innerHTML="*This field is required";
        return false;
    }
    else if(isNaN(ephone))
    {
        document.getElementById("phoneerror").innerHTML="*Phone number error";
        return false;

    }
    else if(ephone.length<11 || ephone.length>11)
    {
        document.getElementById("phoneerror").innerHTML="*Please insert correct phone number";
        return false;
    }
    return true;
}
function checkAddress()
{
    eaddress=document.getElementById('empaddress').value;
    if(eaddress=="")
    {
        document.getElementById("addresserror").innerHTML="*This field is required";
        return false;
    }
    
    return true;
}
function checkGender()
{
    egender=document.getElementById('empgender').checked;
    if(!egender)
    {
        document.getElementById("gendererror").innerHTML="*Please select one option";
        return false;
    }
    
    return true;
}
function checkDob()
{
    edob=document.getElementById('empdob').value;
    if(edob=="")
    {
        document.getElementById("doberror").innerHTML="*Please insert your date of birth ";
        return false;
    }
    
    return true;
}
function checkPassword()
{
    epass=document.getElementById('emppass').value;
    ecpass=document.getElementById('empcpass').value;
    if(epass=='' || ecpass=='')
    {
        document.getElementById("passerror").innerHTML="Please insert your password ";
        return false;
    }
    else if(epass.length<8 || !epass.match(/[A-Z]/) || !epass.match(/[a-z]/) || !epass.match(/[0-9]/) || !epass.match(/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/))
    {
        document.getElementById("passerror").innerHTML="*Your password should have atleast 8 characters, should contain atleast one uppercase letter,one number and one special character ";
        return false;
    }
    else if(epass!=ecpass)
    {
        document.getElementById("passerror").innerHTML="*Your passwords didnt matched ";
        return false;
    }
    
    return true;
}
function checkFile(){
    var myfile=document.getElementById("empnid");
    var files=myfile.files;
    var files2=myfile.value;
    if(files.length==0)
    {
        document.getElementById("niderror").innerHTML="*Please insert your nid";
        return false;

    }
    else{
        var allows =/(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if(!allows.exec(files2))
        {
            document.getElementById("niderror").innerHTML="*Only jpg,jpeg and png format is allowed";
            return false;
        }

    }
    return true;
}
function checkPass()
{
    epass=document.getElementById('emppass').value;
    if(epass=="")
    {
        document.getElementById("passerror").innerHTML="*This field is required";
        return false;
    }
    
    return true;
}
function SchValidation()
{
    if(!checkTrain() || !checkDate() || !checkTime() || !checkFrom() || !checkTo() || !checkSeats() || !checkPrice() )
    {
        return false;
    }
    return true;
}
function checkTrain()
{
    tname=document.getElementById('trainname').value;
    if(tname=='')
    {
        document.getElementById("trainerror").innerHTML="*This field is required";
        return false;
    }
    
    return true;
}
function checkDate()
{
    tdate=document.getElementById('traindate').value;
    if(tdate=='')
    {
        document.getElementById("dateerror").innerHTML="*This field is required";
        return false;
    }
    
    return true;
}
function checkTime()
{
    ttime=document.getElementById('traintime').value;
    if(ttime=="")
    {
        document.getElementById("timeerror").innerHTML="*This field is required";
        return false;
    }
    
    return true;
}
function checkFrom()
{
    tfrom=document.getElementById('trainfrom').value;
    if(tfrom=='')
    {
        document.getElementById("fromerror").innerHTML="*This field is required";
        return false;
    }
    
    return true;
}
function checkTo()
{
    tto=document.getElementById('trainto').value;
    if(tto=='')
    {
        document.getElementById("toerror").innerHTML="*This field is required";
        return false;
    }
    
    return true;
}
function checkSeats()
{
    tseats=document.getElementById('trainseats').value;
    if(tseats=='')
    {
        document.getElementById("seatserror").innerHTML="*This field is required";
        return false;
    }
    
    return true;
}
function checkPrice()
{
    tprice=document.getElementById('ticketprice').value;
    if(tprice=='')
    {
        document.getElementById("priceerror").innerHTML="*This field is required";
        return false;
    }
    
    return true;
}
function logValidation()
{
    lemail=document.getElementById('lemail').value;
    lpass=document.getElementById('lpass').value;
    if(lemail=="" || lpass=="")
    {
        document.getElementById("error").innerHTML="*Please insert your email and password";
        return false;

    }
    return true;
}
function loadschedules(){
    var train=document.getElementById("train").value;
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("print").innerHTML=this.responseText;
        }
    }
    xhr.open("POST", "http://localhost/Proj/control/SearchScheduleCheck.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("train="+train);
}