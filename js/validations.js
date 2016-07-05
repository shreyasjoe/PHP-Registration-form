function formValidations(){
    
    var name = document.reg.name.value;
    var namereg = /^[A-Za-z]+$/;
    var nlen = name.length;
    //alert(namereg.test(name));
    var email = document.reg.email.value;
    var emailreg = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
    
    var phone = document.reg.phone.value;
    var phonereg = /^[0-9]+$/;
    var plen = phone.length;
    
    var country = document.reg.country.value;
    var about = document.reg.about.value;
    var dob = document.reg.dob.value;
    
     
    if((!(namereg.test(name))) || (nlen <= 2)){
        document.reg.name.focus();
        document.getElementById('name_error').innerHTML = "Please enter valid name";
        return false;
    }else if((name === '')){
        document.reg.name.focus();
        document.getElementById('name_error').innerHTML = "You can not left this field blank..";
        return false;
    }
    if(!(emailreg.test(email)) || (email === '')){
        document.reg.email.focus();
        document.getElementById('email_error').innerHTML = "Enter valid email";
        return false;
    }
    if(!(phonereg.test(phone)) || (plen <= 9)){
        document.reg.phone.focus();
        document.getElementById('phone_error').innerHTML = "Please enter valid Mobile number";
        return false;
    }else if((phone === '')){
        document.reg.phone.focus();
        document.getElementById('phone_error').innerHTML = "You can not left this field blank..";
        return false;
    }
    if(country === ''){
    	  document.reg.country.focus();
        document.getElementById('country_error').innerHTML = "You can not left this field blank..";
        return false;	
    }
    if(about === ''){
    	  document.reg.about.focus();
        document.getElementById('about_error').innerHTML = "You can not left this field blank..";
        return false;	
    }
    
    var today = new Date();
    var birthDate = new Date(dob);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
    if(age < 15){
		    
		  document.reg.dob.focus();
        document.getElementById('dob_error').innerHTML = "You are not eligible to fill the form..";
        return false;	
    }
    
}