function CheckPassword(password, toCheckPassword)
{
    var n = password.value.localeCompare(toCheckPassword.value);
    if (n != 0 )
    {
        alert('Les mots de passes ne sont pas les mêmes');
        password.value ="";
        toCheckPassword.value ="";
    }
}


   function isEmail(myVar){
     // La 1ère étape consiste à définir l'expression régulière d'une adresse email
     var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');

     return regEmail.test(myVar.value);
   }

   var emails = new Array('adressemail@gmail','adresse@mel.fr','adr@fr.com.eu');

   for(var e = 0; e < emails.length; e++){
     console.log('Test sur '+ emails[e] +' : '+ isEmail(emails[e]) +' < br /> ');
   }
   