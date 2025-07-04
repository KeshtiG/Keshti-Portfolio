const items = document.querySelectorAll('.hero-rotator__item')
let currentIndex = 0

items[currentIndex].classList.add('hero-rotator__item--active')

setInterval(() => {
  const current = items[currentIndex]
  const nextIndex = (currentIndex + 1) % items.length
  const next = items[nextIndex]

  current.classList.remove('hero-rotator__item--active')
  current.classList.add('hero-rotator__item--out')

  next.classList.add('hero-rotator__item--active')

  setTimeout(() => {
    current.classList.remove('hero-rotator__item--out')
    current.style.zIndex = ''
  }, 600)

  currentIndex = nextIndex
}, 2000)

