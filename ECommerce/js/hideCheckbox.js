function hideCheckbox(){
  var submitButton = document.getElementById("submitReg");
  if(submitButton.disabled == true){
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
}