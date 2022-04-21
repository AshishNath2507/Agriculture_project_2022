



document.addEventListener('click', e =>{
    const isDropDownButton = e.target.matches("[data-dropdown-button]")
    if(!isDropDownButton && e.target.closest("[data-dropdown]") != null) return

    let currentDropdown;
    if(isDropDownButton){
        currentDropdown = e.target.closest("[data-dropdown]")
        currentDropdown.classList.toggle('active')
    }

    document.querySelectorAll("[data-dropdown].active").forEach(navDropdown =>{
        if(navDropdown === currentDropdown) return
        navDropdown.classList.remove("active")
    })

})

function Toggle() {
  var temp = document.getElementById("pswd");
  if (temp.type === "password") {
      temp.type = "text";
    }
  else {
      temp.type = "password";
    }
}

// $(document).ready(function(){
//     $('#formAll input[type=checkbox]').attr('checked',false);
// });

// $(function(){
//     $('input[type=checkbox]').prop("checked", false);
// });


//Function for input[checkbox] to get unchecked on page load 
window.onload = function(){
    var checkboxes = document.getElementsByTagName("INPUT");
 
    for(var x=0; x<checkboxes.length; x++)
    {
       if(checkboxes[x].type == "checkbox")
       {
           checkboxes[x].checked = false;
       }
    }
 
}

// function listOfYears(){
//     const max = new Date().getUTCFullYear();
//     const min = max - 60;
//     const yearRange = _.range(min, max + 1);
//     console.log(yearRange);
// }

    
// document.getElementById('gradyear').addEventListener('click', listOfYears())
