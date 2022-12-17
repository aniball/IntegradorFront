
const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const email = document.getElementById("email");
const cantidadEntradas = document.getElementById('cantidadEntrada');
const categoria = document.getElementById('inputState');
const mensajesValidacion = document.getElementById("mensajesValidacion");
const expRegular = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

const botonCalcular = document.getElementById('botonCalcular');
const botonBorrar = document.getElementById("botonBorrar");
const valorTicket = 200

botonCalcular.addEventListener("click", validarVenta);
botonBorrar.addEventListener("click", borrarFormulario);


function validarVenta(){
  let validacionOk = true;
  if (nombre.value.length < 2) {
    mensajesValidacion.innerHTML = "Ingrese un nombre valido";
    nombre.focus();
    validacionOk = false;
  } else if (apellido.value < 2) {
    mensajesValidacion.innerHTML = "Ingrese un apellido valido";
    apellido.focus();
    validacionOk = false;
  } else if (!expRegular.test(email.value)) {
    mensajesValidacion.innerHTML = "El email no es valido";
    email.focus()
    validacionOk = false;
  }      
  if (validacionOk) {
    mensajesValidacion.innerHTML = "";
    resumen();
  }
}


function resumen(){
  
  console.log("Categoria " + categoria.value + " cantidad: " + cantidadEntradas.value + " ValorTicket: " + valorTicket)
  cantidadEntradas.value

  let totalCalculado = 0;

  if (categoria.value == "0") {
    let precioConDescuento = valorTicket 
    totalCalculado = cantidadEntradas.value * precioConDescuento  
  } else if (categoria.value == "1") {
    let precioConDescuento = valorTicket - (valorTicket * 0.80)
    totalCalculado = cantidadEntradas.value * precioConDescuento
  } else if (categoria.value == "2") {
    let precioConDescuento = valorTicket - (valorTicket * 0.50)
    totalCalculado = cantidadEntradas.value * precioConDescuento
  } else if (categoria.value == "3"){
    let precioConDescuento = valorTicket - (valorTicket * 0.15)
    totalCalculado = cantidadEntradas.value * precioConDescuento
  }

  console.log("Total Calculado: " + totalCalculado)
  totalCompra.innerHTML = `<h5>Total a pagar: $ ${totalCalculado}</h5>`
}

function borrarFormulario(){
  categoria.value = "default"
  totalCompra.innerHTML = "<h5>Total a pagar: $ 0 </h5>"
  mensajesValidacion.innerHTML = "";
}

