
 function testffpaymnet(){
    if (document.fomepayment.nome.value=="" ) {
        document.getElementById("nom").innerHTML="Ce champt ne peut pas etre vide";
          return false;
    }
    if (document.fomepayment.payment.value=="" ) {
        document.getElementById("paymentt").innerHTML="Ce champt ne peut pas etre vide";
        return false;  
    }
    if (document.fomepayment.bill.value =="" ) {
        document.getElementById("billl").innerHTML="Ce champt ne peut pas etre vide";
      return false;       
    }
   
    if (document.fomepayment.amount.value=="" ) {
        document.getElementById("amountt").innerHTML="Ce champt ne peut pas etre vide";
         return false;     
    }
    if (document.fomepayment.balance.value=="" ) {
        document.getElementById("balancee").innerHTML="Ce champt ne peut pas etre vide";
         return false;     
    }
    if (document.fomepayment.date.value=="" ) {
        document.getElementById("datee").innerHTML="Ce champt ne peut pas etre vide";
         return false;     
    }
 }