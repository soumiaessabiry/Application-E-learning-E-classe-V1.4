
 function testffcour(){
    if (document.formaddcourse.nom.value=="" ) {
        document.getElementById("nome").innerHTML="Ce champt ne peut pas etre vide";
          return false;
    }
    if (document.formaddcourse.duree.value=="" ) {
        document.getElementById("dureec").innerHTML="Ce champt ne peut pas etre vide";
        return false;  
    }
    if (document.formaddcourse.discription.value =="" ) {
        document.getElementById("discriptione").innerHTML="Ce champt ne peut pas etre vide";
      return false;       
    }
   
    if (document.formaddcourse.prix.value=="" ) {
        document.getElementById("prixe").innerHTML="Ce champt ne peut pas etre vide";
         return false;     
    }
 }