window.addEventListener("load", function () {
    let trambolico = {
        elemento: "trambolica",
        form: document.getElementById("form-variable-trambolica"),
        output: document.getElementById("variable-trambolica-resultado")
    };
    let contador = {
        elemento: "contador",
        form: document.getElementById("form-contador"),
        output: document.getElementById("contador-resultado")
    };
    let multiplicador = {
        elemento: "multiplicador",
        form: document.getElementById("form-multiplicador"),
        output: document.getElementById("multiplicador-resultado")
    };
    trambolico.form.addEventListener("submit", function(event){
        event.preventDefault();
        enviarCalculo(trambolico);
    });
    contador.form.addEventListener("submit", function(event){
       event.preventDefault();
       enviarCalculo(contador);
    });
    multiplicador.form.addEventListener("submit", function(event){
       event.preventDefault();
       enviarCalculo(multiplicador);
    });
});

function enviarCalculo (elemento) {
    let xhr = new XMLHttpRequest();
    let datosForm = new FormData(elemento.form);
    console.log(datosForm);
    xhr.addEventListener("load" , function(event){
        if (event.target.status === 200) {
            console.log(event.target.response);
            elemento.output.innerText = event.target.response;
        }
    });
    xhr.open("POST", "app/grupo-dos.php");
    xhr.send(datosForm);
}