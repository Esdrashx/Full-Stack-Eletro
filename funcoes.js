function exibir_categoria(categoria){
    alert(categoria); 
    let elementos= document.getElementsByClassName('produtos');
    console.log(elementos);
    for(var i=0; i=elementos.length; i++){
        console.long(elementos[i].id);
        if (categoria== elemetnos[i].id)
        elementos[i].style = "display:block";
        else 
        elementos[i].style = "display:none";
    }
}

let exibir_todos = () => {

   let elementos= document.getElementsByClassName('produtos');
    
   for(var i=0; i=elementos.length; i++){
    elementos[i].style = "display:block"; 
   }        
}

let destaque = (imagem) => {
console.log(imagem);
if(imagem.width==440)
imagem.width=220
else
imagem.width= 440;
}
