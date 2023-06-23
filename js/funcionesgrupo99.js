const fechaNacimiento = document.getElementById("fechaNacimiento");
const edad = document.getElementById("edad");

const calcularEdad = (fechaNacimiento) => {
    const fechaActual = new Date();
    const anoActual = parseInt(fechaActual.getFullYear());
    const mesActual = parseInt(fechaActual.getMonth()) + 1;
    const diaActual = parseInt(fechaActual.getDate());

    // 2016-07-11
    const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
    const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
    const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));

    let edad = anoActual - anoNacimiento;
    if (mesActual < mesNacimiento) {
        edad--;
    } else if (mesActual === mesNacimiento) {
        if (diaActual < diaNacimiento) {
            edad--;
        }
    }
    return edad;
};

window.addEventListener('load', function () {

    fechaNacimiento.addEventListener('change', function () {
        if (this.value) {
            edad.innerText = `Su edad es ${calcularEdad(this.value)} años`;
        }
    });

});

function validar(e) {
swal({title: "Su consulta ha sido enviada", 
text: "Muchas gracias!!", 
icon: "success"});
return false;
}

function validar1(e) {
swal({title: "USUARIO NO REGISTRADO", 
text: "Intente nuevamente", 
icon: "warning"});
return false;
}