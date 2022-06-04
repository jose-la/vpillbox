function botonAvanzado() {
    var contenedorAvanzado, varCerrarAvanzado, contenedorPrincipal;

    contenedorAvanzado=document.getElementById("avanzado");
    contenedorAvanzado.style.display="block";

    contenedorPrincipal=document.getElementById("principal");
    varCerrarAvanzado=document.getElementById("cerrarAvanzado");
    contenedorPrincipal.style.display="none";
    varCerrarAvanzado.style.display="block";

    varBotonAvanzado=document.getElementById("botonAvanzado");
    varBotonAvanzado.style.display="none";
}

function cerrarAvanzado() {
    var contenedorAvanzado, varBotonAvanzado, contenedorPrincipal;

    contenedorAvanzado=document.getElementById("avanzado");
    varBotonAvanzado=document.getElementById("botonAvanzado");
    contenedorAvanzado.style.display="none";
    varBotonAvanzado.style.display="block";

    contenedorPrincipal=document.getElementById("principal");
    contenedorPrincipal.style.display="block";

    varCerrarAvanzado=document.getElementById("cerrarAvanzado");
    varCerrarAvanzado.style.display="none";
}