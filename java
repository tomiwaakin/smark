
pattern="(?=.*\d)(?=.*[a-z]
    )(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
        <div id="message">

        <h3>Password must contain the following:</h3>

        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>

        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>

        <p id="number" class="invalid">A <b>number</b></p>

        <p id="length" class="invalid">Minimum <b>8 characters</b></p>

       </div>
        var pw = document.getElementById('pword');

        var letter = document.getElementById('letter');

        var capital = document.getElementById('capital');

        var number = document.getElementById('number');

        var length = document.getElementById('length');

  pw.onfocus = function() {
  document.getElementById("message").style.display = "block";
 }
// pw.onblur = function() {
//   document.getElementById("message").style.display = "none";
// }
// pw.onkeyup = function() {
//   // Validate lowercase letters
//   var lowerCaseLetters = /[a-z]/g;
//   if(pw.value.match(lowerCaseLetters)) {
//     letter.classList.remove("invalid");
//     letter.classList.add("valid");
//   } else {
//     letter.classList.remove("valid");
//     letter.classList.add("invalid");
// }

//   // Validate capital letters
//   var upperCaseLetters = /[A-Z]/g;
//   if(pw.value.match(upperCaseLetters)) {
//     capital.classList.remove("invalid");
//     capital.classList.add("valid");
//   } else {
//     capital.classList.remove("valid");
//     capital.classList.add("invalid");
//   }

//   // Validate numbers
//   var numbers = /[0-9]/g;
//   if(pw.value.match(numbers)) {
//     number.classList.remove("invalid");
//     number.classList.add("valid");
//   } else {
//     number.classList.remove("valid");
//     number.classList.add("invalid");
//   }

//   // Validate length
//   if(pw.value.length >= 8) {
//     length.classList.remove("invalid");
//     length.classList.add("valid");
//   } else {
//     length.classList.remove("valid");
//     length.classList.add("invalid");
//   }
// }
