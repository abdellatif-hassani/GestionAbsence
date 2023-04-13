// afficher le button date Echeance si chèque ou effet
function changeFunc(idElement,idBlock) {
   var selectBox = document.getElementById(idElement);
   var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   if(selectedValue==='Espèce')
     document.getElementById(idBlock).style.display="none";
   else
   document.getElementById(idBlock).style.display="block";
}
