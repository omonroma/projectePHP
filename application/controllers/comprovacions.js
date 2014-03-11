/*
 * Aquest arxiu fa la comprovació mitjançant Javascript de:
 * 1. DNI
 * 2. Correu Electrònic 
 *
 */

/* * * * * * * * * * * * * * *
 *                           *
 *    Comprovació del DNI    *
 *                           *
 * * * * * * * * * * * * * * */

// Comprovació si un DNI és correcte o no
// (entre 5 i 8 digits seguits i després la lletras que li correspongui).
// Accepta NIEs (Extrangers amb X, Y o Z al principi)
function isDNI(dni) {
    var numero, final, letra;
    var expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;

    var dni = dni.toUpperCase();

    if(expresion_regular_dni.test(dni) === true){
        numero = dni.substr(0,dni.length-1);
        numero = numero.replace('X', 0);
        numero = numero.replace('Y', 1);
        numero = numero.replace('Z', 2);
        final = dni.substr(dni.length-1, 1);
        numero = numero % 23;
        letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero+1);
        if (letra != final) {
            //alert('Dni erroni, la lletra del NIF no es correspon');
            return false;
        }else{
            //alert('Dni correcte');
            return true;
        }
    }else{
        //alert('Dni erroni, format no vàlid');
        return false;
    }
}

/* * * * * * * * * * * * * * *
 *                           *
 *    Validació del Correu   *
 *                           *
 * * * * * * * * * * * * * * */

function validarCorreu(correu) {
    var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(correu) )
        alert("Error: La direcció de correu " + correu + " és incorrecte.");
}
