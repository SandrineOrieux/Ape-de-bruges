const button = document.querySelector(".js-pastEvent-button");


button.addEventListener('click', () => {
  const contentDiv = document.querySelector(".js-pastEvent-content")

  if (contentDiv.classList.contains('d-none')) {

    axios.get('/évènements/passés')
      .then((response) => {
        contentDiv.classList.remove('d-none')
        contentDiv.innerHTML = response.data.content
      })
      .catch(() => {
        contentDiv.innerHTML = "cette partie est inaccessible veuillez réésayé plus tard!"
      })

  } else {
    contentDiv.classList.add('d-none')
  }
})
