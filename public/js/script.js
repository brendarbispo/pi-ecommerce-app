

const lupa = document.getElementById("lupa");
lupa.addEventListener('click', function () {
    buscarProdutos();
});
const buscar = document.getElementById("buscar");
buscar.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        buscarProdutos();
    }
});

function buscarProdutos() {
    const texto = buscar.value;
    if (texto.length > 3) {
        window.location.href = `/produtos/${texto}`;
    }
}
