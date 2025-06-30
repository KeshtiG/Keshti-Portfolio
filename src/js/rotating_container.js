const items = document.querySelectorAll('.hero__rotating-item')
let currentIndex = 0

items[currentIndex].classList.add('hero__rotating-item--active')

setInterval(() => {
  const current = items[currentIndex]
  const nextIndex = (currentIndex + 1) % items.length
  const next = items[nextIndex]

  current.classList.remove('hero__rotating-item--active')
  current.classList.add('hero__rotating-item--out')

  next.classList.add('hero__rotating-item--active')

  setTimeout(() => {
    current.classList.remove('hero__rotating-item--out')
    current.style.zIndex = ''
  }, 600)

  currentIndex = nextIndex
}, 3000)

