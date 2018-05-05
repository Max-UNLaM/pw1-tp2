window.addEventListener("load", function () {
    let ecuacion = {
        elemento: "ecuacion",
        form: document.getElementById("form-ecuacion"),
        output: document.getElementById("ecuacion-resultado")
    };
    ecuacion.form.addEventListener("submit", function (event) {
        event.preventDefault();
        enviarCalculo(ecuacion);
    });
    let biblioteca = {
        elemento: "biblioteca",
        form: document.getElementById("form-biblioteca"),
        output: document.getElementById("biblioteca-resultado")
    };
    biblioteca.form.addEventListener("submit", function (event) {
        event.preventDefault();
        enviarCalculo(biblioteca);
    });
    let mayor = {
        elemento: "mayor",
        form: document.getElementById("form-mayor"),
        output: document.getElementById("mayor-resultado")
    };
    mayor.form.addEventListener("submit", function (event) {
        event.preventDefault();
        enviarJson(mayor);
    });
    let menor = {
        elemento: "menor",
        form: document.getElementById("form-menor"),
        output: document.getElementById("menor-resultado")
    };
    menor.form.addEventListener("submit", function (event) {
        event.preventDefault();
        enviarJson(menor);
    });
    let medio = {
        elemento: "medio",
        form: document.getElementById("form-medio"),
        output: document.getElementById("medio-resultado")
    };
    medio.form.addEventListener("submit", function (event) {
        event.preventDefault();
        enviarJson(medio);
    });
});

function enviarCalculo(elemento) {
    let xhr = new XMLHttpRequest();
    let datosForm = new FormData(elemento.form);
    xhr.addEventListener("load", function (event) {
        if (event.target.status === 200) {
            console.log(event.target.response);
            elemento.output.innerText = event.target.response;
        }
    });
    xhr.open("POST", "app/grupo-tres.php");
    xhr.send(datosForm);
}

function enviarJson(elemento) {
    let xhr = new XMLHttpRequest();
    let datos = JSON.stringify(agruparElementos(elemento.form));
    console.log(datos);
    xhr.addEventListener("load", function (event) {
        if (event.target.status === 200) {
            console.log(event.target.response);
            elemento.output.innerText = event.target.response;
        }
    });
    xhr.open("POST", "app/grupo-tres.php", true);
    xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
    xhr.send(datos);
}

function agruparElementos(formulario) {
    let resultado = {
        calculo: formulario.elements[0].value,
        valor: []
    };
    console.log(resultado);
    for (let i = 0; i < formulario.elements.length; i++){
        if (formulario.elements[i].type === "number") {
            resultado.valor.push(formulario.elements[i].value);
        }
    }
    console.log(resultado);
    return resultado;
}