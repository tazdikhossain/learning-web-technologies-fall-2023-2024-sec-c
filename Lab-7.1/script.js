
function checkFullName() {
   let name = document.getElementById('fullname').value;
   let nameLen = name.split(' ');

   if (nameLen.length < 2) {
       document.getElementById('fnameError').innerHTML = "Can not be less than 2 words";
   } else {
       document.getElementById('fnameError').innerHTML = "";
   }

   for (let i = 0; i < name.length; i++) {
       if (!checkChar(name[i])) {
           document.getElementById('fnameError').innerHTML = "Name can only contain letters, dots, or spaces.";
           break;
       }
   }
   checkFormValidity();
}

function checkChar(ch) {
   return (ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z') || ch === '.' || ch === ' ' || !isNaN(ch);
}




function checkFullName() {
   let name = document.getElementById('fullname').value;
   let nameLen = name.split(' ');

   if (nameLen.length < 2) {
       document.getElementById('fnameError').innerHTML = "Can not be less than 2 words";
   } else {
       document.getElementById('fnameError').innerHTML = "";
   }

   for (let i = 0; i < name.length; i++) {
       if (!checkChar(name[i])) {
           document.getElementById('fnameError').innerHTML = "Name can only contain letters, dots, or spaces.";
           break;
       }
   }
   checkFormValidity();
}



function checkUserName() {
   let username = document.getElementById('username').value;

   if (username === '') {
       document.getElementById('usernameError').innerHTML = "Username cannot be empty.";
   } else {
       for (let i = 0; i < username.length; i++) {
           if (!checkChar(username[i])) {
               document.getElementById('usernameError').innerHTML = "Username can only contain letters, numbers, dots, or spaces.";
               break;
           }
       }

       if (username.split(' ').length > 1) {
           document.getElementById('usernameError').innerHTML = "Username cannot contain more than one word.";
       } else if (username.length > 15) {
           document.getElementById('usernameError').innerHTML = "Username cannot exceed 15 characters.";
       } else {
           document.getElementById('usernameError').innerHTML = "";
       }
   }
   checkFormValidity();
}

function checkPhone() {
   let phone = document.getElementById('phone').value;

   if (phone === '') {
       document.getElementById('phoneError').innerHTML = "Phone number cannot be empty.";
   } else {
       for (let i = 0; i < phone.length; i++) {
           if (!Number.isInteger(parseInt(phone[i]))) {
               document.getElementById('phoneError').innerHTML = "Phone number can only contain numbers.";
               break;
           }
       }

       if (phone.length !== 11) {
           document.getElementById('phoneError').innerHTML = "Phone number must be 11 characters long.";
       } else {
           document.getElementById('phoneError').innerHTML = "";
       }
   }
   checkFormValidity();
}

function checkPassword() {
   let password = document.getElementById('password').value;

   if (password === '') {
       document.getElementById('passwordError').innerHTML = "Password cannot be empty.";
   } else if (password.length < 8) {
       document.getElementById('passwordError').innerHTML = "Password must be at least 8 characters long.";
   } else {
       document.getElementById('passwordError').innerHTML = "";
   }
   checkFormValidity();
}

function checkRepassword() {
   let password = document.getElementById('password').value;
   let repassword = document.getElementById('repasswordField').value;

   if (repassword !== password) {
       document.getElementById('repasswordError').innerHTML = "Passwords do not match.";
   } else {
       document.getElementById('repasswordError').innerHTML = "";
   }
   checkFormValidity();
}

function checkMail() {
   let mail = document.getElementById('email').value;
   let atPos = mail.indexOf('@');
   let dotPos = mail.lastIndexOf('.');

   if (!mail) {
       document.getElementById('mailError').innerHTML = "Email cannot be empty.";
   } else if (atPos === -1 || atPos === 0 || dotPos === -1 || dotPos <= atPos + 1 || dotPos === mail.length - 1) {
       document.getElementById('mailError').innerHTML = "Invalid email address.";
   } else {
       document.getElementById('mailError').innerHTML = "";
   }
   checkFormValidity();
}


</script>