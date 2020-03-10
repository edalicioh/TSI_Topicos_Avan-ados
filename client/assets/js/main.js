const selectEstados = document.querySelector("#estado");
const selectCidate = document.querySelector("#cidade");
let estado = '';
let cidade = '';
selectCidate.style.display = "none"

const getEstados = () => {
  fetch('../api')
  .then(response => response.json())
  .then(json => {
    json.map(element => {
      selectEstados.innerHTML += ` <option value="${element.id}" >${ element.nome } - ${element.uf}</option>`;
    })
  })
}

const getCidades = estadoId => {
  fetch('../api/?estado_id=' + estadoId)
  .then(response => response.json())
  .then(json => {
    json.map(element => {
      selectCidate.innerHTML += ` <option value="${element.id}" >${ element.nome }</option>`;
    })
  })
}

selectEstados.addEventListener("change", () => {
  const estadoId = event.target.value;
  estado = event.target.selectedOptions[0].text;  
  selectCidate.style.display = "block";
  getCidades(estadoId);
})

selectCidate.addEventListener('change', () => {
  cidade = event.target.selectedOptions[0].text; 
  alert(`Estado ${estado} com a Cidade ${cidade}`)
})

getEstados();

