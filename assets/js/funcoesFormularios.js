var j = 1;
var c = 0;

function adicionarCampo(){
    var clone = document.getElementById("origem").cloneNode(true);
    var destino = document.getElementById('destino');
    var nameproduto =  document.createAttribute("name");
    var nameqtd = document.createAttribute("name");
    
    nameqtd.value = 'qtd_' + j;
    nameproduto.value = 'produto_' + j;

    

    var remove = destino.children;
    clone = remove[remove.length-1].cloneNode(true);
    remove[c].removeChild(remove[c].children[2]);

    c++;

    destino.appendChild(clone);

    

    var camposClonados = clone.getElementsByTagName('input');
    var select = clone.getElementsByTagName("select");

    for (i = 0; i < camposClonados.length; i++) {
        camposClonados[i].value = '';
        camposClonados[i].setAttributeNode(nameqtd);
        select[i].setAttributeNode(nameproduto);
        j++;
    }
    
}