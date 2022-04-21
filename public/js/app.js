window.addEventListener('load', getData)

function getData(){

  const nasaApiKEY = 'VpdH1he4GP7Nh3el53fAgZBhPszZDRq1bUyucz7n'
  const route =   `https://api.nasa.gov/planetary/apod?api_key=${nasaApiKEY}`

  // console.log("Hola mundo")

  fetch(route)
  .then(res => res.json())
  .then(data => showData(data))

}

function showData({date, explanation, hdurl, title}){

  var info = explanation
  var fecha = date
  var titulo = title
  var img = hdurl
  document.getElementById("contenedor").innerHTML = `<div class="blogs">
       <a href="#">
       <div class="img">
          <img src="${img}" alt="blog-one">
          <div class="blog-date">${fecha}</div>
       </div>
       <div class="blog-text">
           <h3>${titulo}</h3>
           <p>${info}</p>
       </div></a>
   </div>`

}
