
function operacion(id, tipo_operacion) {
    let elemento = document.getElementById(`estadistica-${id}`);
    let valor = tipo_operacion == "restar" ? parseInt(elemento.value) - 1 : parseInt(elemento.value) + 1;

    if (valor >= 0) {
        update(id, elemento, valor)
    }
}

function update(id, elemento, valor) {
    axios.post(`../../controllers/EstadisticasController.php?c=3&id=${id}&valor=${valor}`)
        .then(function (response) {
            elemento.value = response.data.valor
        })
        .catch(function (error) {
            console.error(error);
        });
}
