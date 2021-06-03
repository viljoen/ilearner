const navSlide =()=>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    

    burger.addEventListener('click',() => {
            //Toggle nav
        nav.classList.toggle('nav-active');
        
         //Animate Links
        navLinks.forEach((link, index) => {
        if(link.style.animation){
            link.style.animation = ''
        }
        else {
            link.style.animation = 'navLinkFade 0.5s ease forwards ${index / 7 + 0}s';
        }
        });
        //BurgerAnimation
        burger.classList.toggle('toggle');
    });
    
   

    
}

navSlide();


//Login window tabs

function openUserType(evt, userType) {
  // Declare all variables
  var i, logintabcontent, logintablinks;

  // Get all elements with class="tabcontent" and hide them
  logintabcontent = document.getElementsByClassName("logintabcontent");
  for (i = 0; i < logintabcontent.length; i++) {
    logintabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  logintablinks = document.getElementsByClassName("logintablinks");
  for (i = 0; i < logintablinks.length; i++) {
    logintablinks[i].className = logintablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(userType).style.display = "block";
  evt.currentTarget.className += " active";
}

//Add course wizard

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}