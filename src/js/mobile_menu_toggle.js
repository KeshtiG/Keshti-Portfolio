/**
 * Toggles the mobile navigation menu and updates the menu toggle button icon.
 *
 * @param {HTMLElement} menuToggle - The button element that toggles the menu.
 * @param {HTMLElement} mainNav - The main navigation element to show/hide.
 */

// Get the menu toggle button and the main navigation element
const menuToggle = document.getElementById('menu-toggle')
const mainNav = document.querySelector('.site-header__nav')

// Define the menu icon and close icon SVGs
const menuIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" /></svg>`
const closeIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>`

// Add event listener to the menu toggle button
menuToggle.addEventListener('click', (event) => {
  // Prevent the event from propagating to the document click listener
  // This ensures that clicking the toggle button does not close the menu immediately
  event.stopPropagation();
  // Toggle the 'active' class on the main navigation and change the icon
  mainNav.classList.toggle('active')
  document.body.classList.toggle('mobile-menu-open')
  menuToggle.innerHTML = mainNav.classList.contains('active') ? closeIcon : menuIcon
})

// Add event listener that closes the menu when clicking outside of it
document.addEventListener('click', (event) => {
  // Check if the click is outside the main navigation and if the menu is currently active
  if (!mainNav.contains(event.target) && mainNav.classList.contains('active')) {
    // If so, remove the 'active' class and reset the menu toggle icon
    mainNav.classList.remove('active');
    menuToggle.innerHTML = menuIcon;
    document.body.classList.remove('mobile-menu-open')
  }
});

console.log('Hamburger script running')
