import Swal from "sweetalert2";

/* const boton = document.querySelector("#miCotizador"); */

function alerta() {
  Swal({
    title: "Mensaje Enviado Exitosamente!",
    text: "En breve nos contactaremos",
    icon: "success",
    confirmButtonText: "Aceptar",
  });
}

export default alerta;
