 const toggleButton=document.getElementsByClassName('toggle-button')[0]
 const navbarLinks=document.getElementsByClassName('navbar-links')[0]
 
 toggleButton.addEventListener('click',()=>{
  //console.log(toggleButton);

navbarLinks.classList.toggle('active');
})