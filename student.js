
 function testffstuden(){
    if (document.formstudent.nome.value=="" ) {
        document.getElementById("nomee").innerHTML="Ce champt ne peut pas etre vide";
          return false;
    }
    if (document.formstudent.email.value=="" ) {
        document.getElementById("emaile").innerHTML="Ce champt ne peut pas etre vide";
        return false;  
    }
    if (document.formstudent.phone.value =="" ) {
        document.getElementById("phonee").innerHTML="Ce champt ne peut pas etre vide";
      return false;       
    }
   
    if (document.formstudent.enroll.value=="" ) {
        document.getElementById("enrolle").innerHTML="Ce champt ne peut pas etre vide";
         return false;     
    }
    if (document.formstudent.date.value=="" ) {
        document.getElementById("datee").innerHTML="Ce champt ne peut pas etre vide";
         return false;     
    }
   
 }