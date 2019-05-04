var j = 0;

function adicionarCampo(){
    var clone = document.getElementById("origem").cloneNode(true);
    var destino = document.getElementById('destino');
    var id =  document.createAttribute("id");

    id.value = 'produto_' + j;

    destino.appendChild(clone);

    var camposClonados = clone.getElementsByTagName('input');

    for (i = 0; i < camposClonados.length; i++) {
        camposClonados[i].value = '';
        camposClonados[i].setAttributeNode(id);
        j++;
    }
}