document.addEventListener('DOMContentLoaded', function () {
    const entradaItem = document.getElementById('entradaItem');
    const adicionarItem = document.getElementById('adicionarItem');
    const listaItens = document.getElementById('listaItens');

    adicionarItem.addEventListener('click', function () {
        const novoItemTexto = entradaItem.value.trim();

        if (novoItemTexto !== '') {
            const novoItem = document.createElement('li');
            novoItem.textContent = novoItemTexto;
            listaItens.appendChild(novoItem);
            entradaItem.value = '';
        }
    });

    entradaItem.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            adicionarItem.click();
        }
    });
});