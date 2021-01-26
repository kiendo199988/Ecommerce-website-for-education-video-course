function Validate(){
// SELECTING ALL TEXT ELEMENTS
  let username = document.getElementById('username').value;
  let email = document.getElementById('email').value;
  let password = document.getElementById('password').value;
  let password_confirm = document.getElementById('password_confirm').value;
// if one the fields is blank => error message
  if (username == "" || email == "" || password =="" || password_confirm=="") {
    document.getElementById('all_fields_required').innerHTML = "Enter all the fields!";
    return false;
  }
// if the username has less than 3 characters => error message
else if(username.length<3) {
  document.getElementById('name_error').innerHTML = "Username must have at least 3 characters!";
  return false;
}
// if password has less than 5 characters => error message
else if(password.length<5) {
  document.getElementById('password_error').innerHTML = "Password must have at least 5 characters!";
  return false;
}
// if 2 passwords are not the same value => error message
else if(password != password_confirm) {
  document.getElementById('password_confrim_error').innerHTML = "Password is not matched";
  return false;
}
else{
  return true;
}
}
