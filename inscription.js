
 function testfirst(){
    if (document.forminscription.firstname.value=="" ) {
        document.getElementById("firstname").innerHTML="Ce champt ne peut pas etre vide";
          return false;
    }
    if (document.forminscription.lastname.value=="" ) {
        document.getElementById("lastnameid").innerHTML="Ce champt ne peut pas etre vide";
        return false;  
    }
    if (document.forminscription.email.value =="" ) {
        document.getElementById("emailid").innerHTML="Ce champt ne peut pas etre vide";
      return false;       
    }
   
    if (document.forminscription.password.value=="" ) {
        document.getElementById("passwordid").innerHTML="Ce champt ne peut pas etre vide";
         return false;     
    }
    if (document.forminscription.confpassword.value=="" ) {
        document.getElementById("confpasswordid").innerHTML="Ce champt ne peut pas etre vide";
         return false;      
    }
    if (document.forminscription.password.value!=document.forminscription.confpassword.value ) {
        Swal.fire({
        icon: 'error',
        title: 'Oops...votre confirmation de password et inccorect!!!',
        })
          return false;     
    }


 }