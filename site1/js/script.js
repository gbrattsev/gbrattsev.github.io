const btn = document.querySelector('.btn')
const form = document.querySelector('.form')
const close = document.querySelector('.close')

btn.addEventListener('click', function() {
   return form.classList.add('show')
})

close.addEventListener('click', function() {
  return form.classList.remove('show')
})