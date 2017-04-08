/* PROFILE DROPDOWN LIST */
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdownList").classList.toggle("profile-dropdown-display");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event)
{
  if (!event.target.matches('.dropdowncaret'))
  {
    var profiledropdowns = document.getElementsByClassName("profile-dropdown-content");
    var i;
    for (i = 0; i < profiledropdowns.length; i++)
    {
      var openDropdown = profiledropdowns[i];
      if (openDropdown.classList.contains('profile-dropdown-display')) {openDropdown.classList.remove('profile-dropdown-display');}
    }
  }
}
