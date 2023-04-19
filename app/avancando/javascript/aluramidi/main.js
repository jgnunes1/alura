function tocaSom (seletorAudio)
{
   const elemento = document.querySelector(seletorAudio);

 
if (elemento != null && elemento.localName === 'audio'){
    elemento.play();
}
else{
    //Alert();
    console.log('Elemento não encontrado');
}

}

const listaDeTeclas = document.querySelectorAll('.tecla'); 

//enquanto houver a condição
for (let contador = 0; contador < listaDeTeclas.length; contador++){

    const tecla = listaDeTeclas[contador];
    const instrumento = tecla.classList[1];    
    const idAudio = `#som_${instrumento}`;   //template string

    
    tecla.onclick = function() {
        tocaSom(idAudio); 
    }
    
    tecla.onkeydown = function(evento) {

        console.log(evento.code == 'Space')

        if(evento.code ==='space'){
            tecla.classList.add('ativa');
        }
      
        if(evento.code === 'Enter' ){
            tecla.classList.add('ativa');
        }
    }

    tecla.onkeyup = function () {
       tecla.classList.remove('ativa');
    }

}




