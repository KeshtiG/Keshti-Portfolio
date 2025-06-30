/**
 * Navbar Scroll Behavior
 *
 * - Adds a transparent background when at the top of the page.
 * - Adds a 'scrolled' class when the user scrolls down from the top.
 * - Hides the navbar when scrolling down, shows it when scrolling up.
 *
 * @param {Event} event - The scroll event triggered on window scroll.
 */

// Toggle Navbar Background and Visibility on Scroll
const navbar = document.querySelector('header')
let lastScrollY = window.scrollY

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY

    // Set transparent background when at the top
    if (currentScroll <= 0) {
        navbar.classList.remove('scrolled', 'hidden')
        return
    }

    // Adds 'scrolled' class when not at the top
    navbar.classList.add('scrolled')

    // Show/hide navbar based on scroll direction
    if (currentScroll > lastScrollY) {
        // Scroll down → hide
        navbar.classList.add('hidden')
    } else {
        // Scroll up → show
        navbar.classList.remove('hidden')
    }

    lastScrollY = currentScroll
})
