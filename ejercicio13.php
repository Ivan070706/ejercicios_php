
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora con JavaScript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<div class="card shadow mx-auto" style="max-width:450px">
    <div class="card-body">

        <h2>Calculadora</h2>

        <form id="formulario" action="resultado.php" method="POST">

            <input type="number" id="num1" name="num1"
                class="form-control mb-3" placeholder="Número 1">

            <input type="number" id="num2" name="num2"
                class="form-control mb-3" placeholder="Número 2">

            <select name="operador" id="operador" class="form-select mb-3">
                <option value="">Selecciona operación</option>
                <option value="+">Sumar</option>
                <option value="-">Restar</option>
                <option value="*">Multiplicar</option>
                <option value="/">Dividir</option>
                <option value="%">Módulo</option>
            </select>

            <div id="error" class="text-danger mb-3"></div>

            <button class="btn btn-primary w-100">Calcular</button>

        </form>
    </div>
</div>

<script>
const formulario = document.getElementById("formulario");

formulario.addEventListener("submit", function(event) {

    const n1 = document.getElementById("num1").value.trim();
    const n2 = document.getElementById("num2").value.trim();
    const operador = document.getElementById("operador").value;

    const error = document.getElementById("error");

    error.textContent = "";

    if (n1 === "" || n2 === "") {
        error.textContent = "Debes introducir los dos números.";
        event.preventDefault();
        return;
    }

    if (!Number.isInteger(Number(n1)) ||
        !Number.isInteger(Number(n2))) {
        error.textContent = "Los números deben ser enteros.";
        event.preventDefault();
        return;
    }

    if (operador === "") {
        error.textContent = "Selecciona una operación.";
        event.preventDefault();
        return;
    }

    if ((operador === "/" || operador === "%") && Number(n2) === 0) {
        error.textContent = "No se puede dividir entre cero.";
        event.preventDefault();
    }

});
</script>

</body>
</html>
