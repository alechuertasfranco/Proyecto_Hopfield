var canvas, context, clear;
let vectorCanvas = [];
let vectorCaracter = [];
let matrizAux = [];
let matrizTranspuesta = [];
let agregar = [];
var horizontal = 5,
    vertical = 5; // donde horizontal es la x y vertical la y
var gw = 300 / horizontal;
var gh = 300 / vertical;
var posicion = { x: 0, y: 0 };
var repetido = true;
var texto = "Aun no se busca ningún caracter";

window.onload = function() {
    canvas = document.getElementById("lienzo");
    context = canvas.getContext("2d");
    clear = document.getElementById("clear");
    buscar = document.getElementById("buscar");
    txt_caracter = document.getElementById("txt_caracter");

    for (let i = 0; i < vertical * horizontal; i++) {
        agregar[i] = 0
    }
    console.log(agregar)

    clear.onclick = function() {
        fillBackground();
    };

    buscar.onclick = function() {
        fetchCaracteres();
    };

    // Agregar
    $("#caracter-form").submit((e) => {
        let agregar_filtrado = []
        e.preventDefault();
        let bool = BuscarCaracter($("#txt_caracter").val());
        agregar.forEach(coordenada => {
            agregar_filtrado.push(coordenada)
        });

        //console.log(bool)
        if (bool) {
            const postData = {
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                _token: $("meta[name='csrf-token']").attr("content"),
                caracter: $("#txt_caracter").val(),
                IdTipo: $("#cmb_tipo").val(),
                vector: JSON.stringify(agregar_filtrado),
            };
            $.post("http://127.0.0.1:8000/crear", postData, (response) => {
                    //console.log(response);
                    $("#caracter-form").trigger("reset");
                    fillBackground();
                })
                .done(function(msg) {
                    console.log(msg);
                })
                .fail(function(xhr, status, error) {
                    console.log(xhr);
                    console.log(status);
                    console.log(error);
                    // error handling
                });
            alert("Caracter ingresado correctamente");
        } else {
            alert("Ese caracter ya ha sido ingresado");
            repetido = true;
        }
    });

    canvas.onmousedown = () => {
        canvas.onmousemove = (event) => {
            var rect = canvas.getBoundingClientRect();
            posicion.x = Math.floor((event.clientX - rect.left) / gw);
            posicion.y = Math.floor((event.clientY - rect.top) / gh);
            vectorCanvas[Number(posicion.y * horizontal) + Number(posicion.x)] = 1;
            x = posicion.x;
            y = posicion.y;
            agregar[y * vertical + x] = { x, y };
            //console.log(vectorCanvas);
            drawSquare(posicion.x, posicion.y, "blue");
        }
    }

    this.onmouseup = () => {
        canvas.onmousemove = () => null
    }


    fillBackground();
    rellenarVector(vectorCanvas);
};

function BuscarCaracter(BuscarCaracter) {
    $.ajax({
        url: "http://127.0.0.1:8000/caracter",
        type: "GET",
        async: false,
        success: function(response) {
            response.forEach((c) => {
                if (c.caracter == BuscarCaracter) {
                    repetido = false;
                }
            });
        },
    });
    return repetido;
}

function fetchCaracteres() {
    $.ajax({
        url: "http://127.0.0.1:8000/caracteres",
        type: "GET",
        success: function(caracteres) {
            console.log("Caracteres");
            console.log(caracteres);
            let caracterFinal = "";
            let encontrado = false;
            let vector_entrante = [];
            let vector_saliente = [];

            matrizAux = llenarAuxiliar(matrizAux);

            caracteres.forEach((caracter) => {
                console.log(caracter);
                matrizTranspuesta = [];
                vectorCaracter = [];
                rellenarVector(vectorCaracter);

                let coordenadas = caracter[2];
                coordenadas.forEach((coordenada) => {
                    vectorCaracter[
                        Number(coordenada.ejey * horizontal) +
                        Number(coordenada.ejex)
                    ] = 1;
                });
                matrizTranspuesta = Transpuesta_Identidad(matrizTranspuesta, vectorCaracter);
                MatrizPesos(matrizTranspuesta, matrizAux);

                console.log("Matriz transpuesta");
                convertirMatriz(matrizTranspuesta, vertical * horizontal, vertical * horizontal);

                console.log("vectorCaracter");
                console.log(vectorCaracter);

                console.log("Matriz de Pesos");
                convertirMatriz(matrizAux, vertical * horizontal, vertical * horizontal);
            });

            console.log('Vector ingresado')
            console.log(vectorCanvas)
            vector_saliente = vectorCanvas;


            while (!CompararVectores(vector_entrante, vector_saliente)) {
                vector_entrante = vector_saliente
                console.log("Vector Entrante:");
                console.log(vector_entrante);
                vector_saliente = VectorResultado(vector_entrante, matrizAux);
                console.log("Vector Resultado:");
                console.log(VectorResultado(vector_entrante, matrizAux))
                vector_saliente = Escalon(vector_saliente);
                console.log("Vector Saliente:");
                console.log(vector_saliente);
                console.log("Estable:");
                console.log(CompararVectores(vector_entrante, vector_saliente))
                console.log('--------------------------------------------------')
            };

            console.log('Ingreso: ');
            graficar(vectorCanvas, vertical, horizontal);
            console.log('Resulto: ');
            graficar(vector_saliente, vertical, horizontal);

            //Compara el resultado con los de la base
            caracteres.forEach((caracter) => {
                if (!encontrado) {
                    encontrado = true;
                    caracterFinal = caracter[0]
                    console.log(caracter);
                    vectorCaracter = [];
                    rellenarVector(vectorCaracter);

                    let coordenadas = caracter[2];
                    coordenadas.forEach((coordenada) => {
                        vectorCaracter[Number(coordenada.ejey * horizontal) + Number(coordenada.ejex)] = 1;
                    });

                    graficar(vectorCaracter, vertical, horizontal);

                    for (let i = 0; i < vertical * horizontal; i++) {
                        if (vectorCaracter[i] != vector_saliente[i]) {
                            encontrado = false;
                        }
                    }
                }
            });
            if (!encontrado) {
                caracterFinal = "404 Not Found"
            }

            texto = "Ingresaste el caracter: " + caracterFinal;
            console.log(texto);
            txt_caracter.value = "Letra: " + caracterFinal;
            decir();
        },
    });
}

function decir() {
    speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
}

function drawSquare(x, y, color) {
    context.fillStyle = color;
    var rx = x * gw;
    var ry = y * gh;
    context.fillRect(rx, ry, gw, gh);
}

function fillBackground() {
    context.fillStyle = "#FFFFFF";
    context.fillRect(0, 0, 300, 300);
    agregar = [];
    vectorCanvas = [];
    vectorCaracter = [];
    matrizAux = [];
    matrizTranspuesta = [];
    repetido = true;
}

// rellena el vector del canvas en -1
function rellenarVector(vectorX) {
    for (let index = 0; index < vertical * horizontal; index++) {
        vectorX[index] = -1;
    }
}

//Realizar la transpuesta y diagonales en 0
function Transpuesta_Identidad(matrizTranspuesta, matrizX) {
    for (let x = 0; x < vertical * horizontal; x++) {
        for (let y = 0; y < vertical * horizontal; y++) {
            if (x == y)
                matrizTranspuesta[
                    Number(x * vertical * horizontal) + Number(y)
                ] = 0;
            else
                matrizTranspuesta[
                    Number(x * vertical * horizontal) + Number(y)
                ] = Number(matrizX[x]) * Number(matrizX[y]);
        }
    }

    return matrizTranspuesta;
}

//Copiar la matriz transpuesta con identidad en un auxiliar
function CopyAuxiliar(matrizTranspuesta, matrizAux) {
    for (let x = 0; x < vertical * horizontal; x++) {
        for (let y = 0; y < vertical * horizontal; y++) {
            matrizAux[Number(x * vertical * horizontal) + Number(y)] =
                matrizTranspuesta[Number(x * vertical * horizontal) + Number(y)];
        }
    }
}

//obtener la matriz de pesos
function MatrizPesos(matrizTranspuesta, matrizAux) {
    for (let x = 0; x < vertical * horizontal; x++) {
        for (let y = 0; y < vertical * horizontal; y++) {
            matrizAux[Number(x * vertical * horizontal) + Number(y)] =
                Number(matrizAux[Number(x * vertical * horizontal) + Number(y)]) +
                Number(matrizTranspuesta[Number(x * vertical * horizontal) + Number(y)]);
        }
    }
}

//llenar auxiliar
function llenarAuxiliar(_matriz) {
    _tamaño = Math.pow(vertical * horizontal, 2);
    console.log("Tamaño de la matriz auxiliar");
    console.log(_tamaño);
    for (let i = 0; i < _tamaño; i++) {
        _matriz[i] = 0;
    }

    return _matriz;
}

// convierte en matriz los vectores
function convertirMatriz(matrizX, ver, hor) {
    matrizString = "";
    for (let x = 0; x < ver; x++) {
        for (let y = 0; y < hor; y++) {
            if (matrizX[Number(x * hor) + Number(y)] >= 0)
                matrizString += "  " + matrizX[Number(x * hor) + Number(y)];
            else
                matrizString += " " + matrizX[Number(x * hor) + Number(y)];
        }
        matrizString += "\n";
    }
    console.log(matrizString);
}

// convierte en matriz los vectores
function graficar(matrizX, ver, hor) {
    matrizString = "";
    for (let x = 0; x < ver; x++) {
        for (let y = 0; y < hor; y++) {
            if (matrizX[Number(x * hor) + Number(y)] >= 0)
                matrizString += " * ";
            else
                matrizString += "   ";
        }
        matrizString += "\n";
    }
    console.log(matrizString);
}

//Determinar salida de red
function VectorResultado(vectorCanvas, MatrizPesos) {
    let _resultado = [];
    let suma = 0;
    for (let x = 0; x < vertical * horizontal; x++) {
        for (let y = 0; y < vertical * horizontal; y++) {
            suma += vectorCanvas[y] * MatrizPesos[Number(x * vertical * horizontal) + Number(y)];
        }
        _resultado[x] = suma;
        suma = 0;
    }

    return _resultado
}

//Retorna un bool que determina si la entrada es igual que la salida
function CompararVectores(vect1, vect2) {
    for (let i = 0; i < vect2.length; i++) {
        if (vect1[i] != vect2[i]) {
            return false;
        }
    }
    return true;
}

function Escalon(_vector) {
    for (let z = 0; z < vertical * horizontal; z++) {
        if (_vector[z] > 0)
            _vector[z] = 1;
        else
            _vector[z] = -1;
    }
    return _vector
}

function tangenteh(_vector) {
    for (let i = 0; i < _vector.length; i++) {
        _valor = _vector[i]
        _vector[i] = Math.tanh(_valor)
    }
    return (_vector)
}

function relu(_vector) {
    for (let i = 0; i < _vector.length; i++) {
        _valor = _vector[i]
        _vector[i] = Math.max(0, _valor)
    }
    return (_vector)
}

function sigmoide(_vector) {
    for (let i = 0; i < _vector.length; i++) {
        _valor = _vector[i]
        _vector[i] = 1 / (1 + Math.exp(-_valor));
    }
    return (_vector)
}

function bipolar(_vector) {
    for (let i = 0; i < _vector.length; i++) {
        if (_vector[i] < 0.5) {
            _vector[i] = -1
        } else {
            _vector[i] = 1
        }
    }
    return _vector
}
