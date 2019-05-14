var j = 1;
var c = 0;

function adicionarCampo(){
    var clone = document.getElementById("origem").cloneNode(true);
    var destino = document.getElementById("destino");
    var nameproduto =  document.createAttribute("name");
    var nameqtd = document.createAttribute("name");
    
    nameqtd.value = 'qtd_' + j;
    
    nameproduto.value = 'produto_' + j;

    let numeroElementos = document.querySelector('#numeroProdutos');
    numeroElementos.setAttribute('value',j);

    var remover = destino.children;
    clone = remover[remover.length-1].cloneNode(true);
    remover[c].removeChild(remover[c].children[2]);
   

    c++;

    clone.childNodes[1].getElementsByTagName('select')[0].setAttribute('required', 'required');
    clone.childNodes[3].getElementsByTagName('input')[0].setAttribute('required', 'required');
    
    destino.appendChild(clone); 

    var camposClonados = clone.getElementsByTagName('input');
    var select = clone.getElementsByTagName('select');

    // console.log(camposClonados);
    // console.log(select);
    

    for (i = 0; i < camposClonados.length; i++) {
        camposClonados[i].value = '';
        camposClonados[i].setAttributeNode(nameqtd);
        select[i].setAttributeNode(nameproduto);
        
        j++;
    }

}

function confirmacaoExcluir(e){
    if(window.confirm('Deseja continuar a excluir?')){
        window.location.replace(e.href);
    }
}

function fecharComanda(){
    var id = document.getElementById("comandaID").value;

        window.location.replace('http://localhost/Pesqueiro/comanda/excluir/'+id);
    
}