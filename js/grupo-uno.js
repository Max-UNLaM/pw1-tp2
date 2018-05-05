window.addEventListener("load", function () {
    let triangulo = {
        elemento: "cuadrado",
        form: document.getElementById("form-area-triangulo"),
        output: document.getElementById("triangulo-resultado")
    };
    let rectangulo = {
        elemento: "rectangulo",
        form: document.getElementById("form-area-rectangulo"),
        output: document.getElementById("rectangulo-resultado")
    };
    let trapecio =  {
        elemento: "trapecio",
        form: document.getElementById("form-area-trapecio"),
        output: document.getElementById("trapecio-resultado")
    };
    triangulo.form.addEventListener("submit", function(event){
        event.preventDefault();
        enviarCalculo(triangulo);
    });
    rectangulo.form.addEventListener("submit", function(event){
       event.preventDefault();
       enviarCalculo(rectangulo);
    });
    trapecio.form.addEventListener("submit", function(event){
       event.preventDefault();
       enviarCalculo(trapecio);
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
    xhr.open("POST", "app/grupo-uno.php");
    xhr.send(datosForm);
}