document.getElementById('mobile-menu-button').addEventListener('click', 
function(){
  let mobileMenu = document.getElementById('mobile-menu');
  let mobileMenuButton = document.getElementById('mobile-menu-button');
  if (mobileMenu.classList.contains('hidden')){
    // show menu
    mobileMenu.classList.remove('hidden');
    mobileMenu.classList.add('sm:hidden');
    //show 'x' icon
    mobileMenuButton.innerHTML = '<svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>'
  } else {
    //hide menu
    mobileMenu.classList.remove('sm:hidden');
    mobileMenu.classList.add('hidden');
    //show hamburger icon
    mobileMenuButton.innerHTML = '<svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>'
  }
})