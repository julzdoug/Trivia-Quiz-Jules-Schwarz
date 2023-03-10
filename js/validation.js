function validation()
{
 var language = document.form.single-choice;
 for (var i = 0; i < language.length; i++) {
  if (language[i].checked){
   break;
  }
 }
 if (i == language.length){
 return document.getElementById("error").innerHTML = "Please check any radio button";
}
  return document.getElementById("error").innerHTML = "You select option " + (i + 1);
}