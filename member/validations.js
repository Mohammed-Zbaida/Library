function validate(){

    let regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    let Full_name = document.getElementById('Full_name');

    let regAddress = /^[a-zA-Z0-9\s,'-]*$/;
    let Adresse = document.getElementById('Adresse');

    let email = document.getElementById('email');

    let cin = document.getElementById('cin');
    var regex = /^[a-zA-Z]\d{8}$/; // regex for CIN validation
    

    let tel = document.getElementById('Phone_number').value;
    let prefix = tel.slice(0, 2);
    let exprt = new RegExp('[0-9]','g');

    let Date = document.getElementById('Date');

    let password = document.getElementById('password');
    let confirm_password = document.getElementById('confirm_password');

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
    var passw=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

    let femaleGender = document.getElementById('femaleGender');
    let maleGender = document.getElementById('maleGender');


    output1 = document.getElementById("error-1");
    output2 = document.getElementById("error-2");
    output3 = document.getElementById("error-3");
    output4 = document.getElementById("error-4");
    output5 = document.getElementById("error-5");
    output6 = document.getElementById("error-6");
    output7 = document.getElementById("error-7");
    output8 = document.getElementById("error-8");
    output9 = document.getElementById("error-9");





    
    if(Full_name.value == ""){
        output1.innerHTML = "*please Enter the empty box";
        document.getElementById("Full_name").style.border = "1px solid #DE0068";  
        return false; 
    } 
    else if(regName.test(Full_name.value) == true){
        output1.innerHTML = "";
        document.getElementById("Full_name").style.border = "1px solid #59CE8F";
        
    }else{
        output1.innerHTML = "Invalid name given.";
        document.getElementById("Full_name").style.border = "1px solid #DE0068";  
        return false; 
    }

    // Adresse
    if(Adresse.value == ""){
        output2.innerHTML = "*please Enter the empty box";
        document.getElementById("Adresse").style.border = "1px solid #DE0068";  
        return false; 
    } else if(regAddress.test(Adresse.value) == true){
        output2.innerHTML = "";
        document.getElementById("Adresse").style.border = "1px solid #59CE8F";
    }else{
        output2.innerHTML = "*The Name Not valid";
        document.getElementById("Adresse" ).style.border = "1px solid #DE0068";
        return false;
    }

    // email
    if (email.value == "") {
        output3.innerHTML  = "*Please enter your email address.";
        email.style.border = "1px solid red";
        return false;
    } else if(email.value.match(mailformat)){
        document.getElementById("email").style.border = "1px solid #59CE8F";
        output3.innerHTML = "";
    } else {
        document.getElementById("email").style.border = "1px solid #DE0068";
        output3.innerHTML = "The email Not valid";
        return false;
    }

    // CIN

    if(cin.value == ""){
        output4.innerHTML = "Please enter your CIN";
        document.getElementById("cin").style.border = "1px solid #DE0068";
        return false;
    } else if(regex.test(cin.value) == true){
        output4.innerHTML = "";
        document.getElementById("cin").style.border = "1px solid #59CE8F";  
        
    } else{
        output4.innerHTML = "*The CIN Not valid";
        document.getElementById("cin").style.border = "1px solid #DE0068";
        return false;
    }  


    if(exprt.test(tel) == true && tel.length == 10 && (prefix == "05" || prefix == "06" || prefix == "07")  ){
        output5.innerHTML = "";
        document.getElementById("Phone_number").style.border = "1px solid #59CE8F"
    } else{
        output5.innerHTML = "not valid a number";
        document.getElementById("Phone_number").style.border = "1px solid #DE0068";
            return false; 
    }

    if(femaleGender.checked  == false  && maleGender.checked == false ){
        output9.innerHTML= "Please enter a gender";
        return false;
    }else{
        output9.innerHTML= ""
    }
    


         // Date
    if(Date.value == ""){
        output6.innerHTML = "*please Enter the Date";
        document.getElementById("Date").style.border = "1px solid #DE0068";  
            return false; 
    }else{
        output6.innerHTML = "";
        document.getElementById("Date").style.border = "1px solid #59CE8F";
    }        

        // password
    if (password.value == "") {
        output7.innerHTML = "*Please enter your password.";
        document.getElementById("password").style.border = "1px solid #DE0068";
        return false;
    }else if(password.value.match(passw)) {
        document.getElementById("password").style.border = "1px solid #59CE8F";
        output7.innerHTML = "";
    }else{
        document.getElementById("password").style.border = "1px solid #DE0068";
        output7.innerHTML = "password 6 to 20 characters long containing at least one numeric digit, one uppercase letter, and one lowercase letter";
        return false;
    }  

                    
    if(confirm_password.value == "") {
        output8.innerHTML = "*Please Retype the password.";
        document.getElementById("confirm_password").style.border = "1px solid red";
        return false;
    }else if(password.value !== confirm_password.value) {
        document.getElementById("confirm_password").style.border = "1px solid #DE0068";
        output8.innerHTML = "*Password does not match";
        return false;
    }else{
        document.getElementById("confirm_password").style.border = "1px solid #59CE8F";
        output8.innerHTML = "";
    } 





}
