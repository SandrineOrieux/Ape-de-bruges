const button = document.querySelector(".js-pastEvent-button");


button.addEventListener('click', () => {
  const contentDiv = document.querySelector(".js-pastEvent-content")

  if (contentDiv.classList.contains('d-none')) {
    contentDiv.classList.remove('d-none')
  } else {
    contentDiv.classList.add('d-none')
  }
  console.log('click button')
})
