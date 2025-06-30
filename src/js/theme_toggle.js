/**
 * Theme Toggle Script
 * 
 * - Handles toggling between light and dark themes for the website.
 * - Saves the selected theme to localStorage and updates the UI accordingly.
 *
 * @param {string} theme - The theme to set ('light' or 'dark').
 */

const toggle = document.getElementById('theme-toggle')
const darkIconContainer = document.getElementById('toggle-dark')
const lightIconContainer = document.getElementById('toggle-light')
const body = document.body

// Init status från localStorage
if (localStorage.getItem('theme') === 'light') {
  body.classList.add('light-theme')
  toggle.classList.add('theme-toggle--light-active')
  lightIconContainer.classList.add('theme-toggle__icon-container--active')
} else {
  darkIconContainer.classList.add('theme-toggle__icon-container--active')
}

toggle.addEventListener('click', () => {
  body.classList.toggle('light-theme')
  toggle.classList.toggle('theme-toggle--light-active')

  darkIconContainer.classList.toggle('theme-toggle__icon-container--active')
  lightIconContainer.classList.toggle('theme-toggle__icon-container--active')

  localStorage.setItem(
    'theme',
    body.classList.contains('light-theme') ? 'light' : 'dark'
  )
})
