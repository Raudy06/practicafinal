function Function(){
    var ced = 0;
    var num = [1, 2, 1, 2, 1, 2, 1, 2, 1, 2];
    var a = [];
    var b = [];
    var c = 0;
    var d = 0;
    var e = 0;
    var f = 0;
    var g = 0;

    ced = prompt ('Digite los Priemros 10 numeros de su Cedula');
    for (var h = 0; h < 10; h++) {
        a.push(ced.charAt(h));
    }

    if ((ced.length <= 9) || (ced.length >= 11)) {
        alert("El Numero Digitado no es Valido");

    }

    else {
        for (var j = 0; j < 10; j++) {
            b.push(num[j] * a[j]);
        }

        for (var i = 0; i < 10; i++) {
            if (b[i] < 10) {
                f += (b[i]);
            }

            else {
                g += (b[i] - 9);
            }
            c = f + g;
        }

        e = c % 10;
        d = 10 - e;
        
        if (d == 10) {
            alert("El Numero Final de la Cedula es: 0");
        }
        else {
            alert("El Numero Final de la Cedula es: " + d);
        }
    }
}