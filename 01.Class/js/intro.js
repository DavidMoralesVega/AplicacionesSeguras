let Nombre = 'David Morales Vega';
console.log(Nombre);
Nombre = 'Oscar';
console.log(Nombre);


let TituloPagina = document.querySelector('#Titulo');


function CambiarTexto() {
    TituloPagina.innerHTML = 'Desarrollo Web';
    TituloPagina.style.color = 'red';
}

TituloPagina.addEventListener('click', CambiarTexto);