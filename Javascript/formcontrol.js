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