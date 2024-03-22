export default function displayTruncatedText() {
  const truncate = document.querySelectorAll(".js-collapse-article");

  truncate.forEach((element) => {
    element.addEventListener('click', (e) => {

      let id = e.currentTarget.id
      id = id.split('-')[1]

      const classe = '.js-content-' + id
      const contentDiv = document.querySelector(classe)

      if (contentDiv.classList.contains('d-none')) {
        contentDiv.classList.remove('d-none')
      } else {
        contentDiv.classList.add('d-none')
      }
    })
  })
}

