fetch("https://atenas-tcg.github.io/menuv2/menu.html")
.then(r => r.text())
.then(html => {
  const cont = document.createElement("div")
  cont.innerHTML = html
  document.body.prepend(cont)
})
