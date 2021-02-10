var canvas, context,clear;
let vectorCanvas=[];
let vectorCaracter=[];
let vectorResultado=[];
let matrizAux=[];
let matrizTranspuesta=[];
let agregar = [];
var horizontal = 6,vertical = 7; // donde horizontal es la x y vertical la y
var gw = 300 / horizontal;
var gh = 300 / vertical;
var posicion = {x: 0, y: 0};
var repetido = true;
var texto = "Aun no se busca ningún caracter";

window.onload = function() {
    canvas = document.getElementById('lienzo');
    context = canvas.getContext('2d');
    clear =document.getElementById('clear');
    buscar =document.getElementById('buscar');


    clear.onclick=function(){
        fillBackground();
    }

    buscar.onclick=function(){
        fetchCaracteres();
    }
    // Agregar
    $('#caracter-form').submit(e => {
        e.preventDefault();
         let bool = BuscarCaracter($('#txt_caracter').val());
         //console.log(bool)
        if(bool){
            const postData = {
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            _token : $("meta[name='csrf-token']").attr("content"),
            caracter: $('#txt_caracter').val(),
            IdTipo: $('#cmb_tipo').val(),
            vector: JSON.stringify(agregar)
            };
                $.post("http://127.0.0.1:8000/crear", postData, (response) => {
                //console.log(response);
                $('#caracter-form').trigger('reset');
                fillBackground();

                }).done(function(msg){console.log(msg)  })
                .fail(function(xhr, status, error) {
                    console.log(xhr)
                    console.log(status)
                    console.log(error)
                    // error handling
                });
            alert('Caracter ingresado correctamente');
        }
        else
        {
            alert('Ese caracter ya ha sido ingresado');
            repetido = true;
        }
    });

    canvas.onmouseup = function(event) {
        var rect = canvas.getBoundingClientRect();
        posicion.x = Math.floor((event.clientX-rect.left)/ gw);
        posicion.y = Math.floor((event.clientY - rect.top) / gh);
        vectorCanvas[Number(posicion.y*horizontal)+Number(posicion.x)]=1;
        x = posicion.x;
        y = posicion.y;
        agregar.push({x,y});
        //console.log(vectorCanvas);
        console.log(posicion);
        drawSquare(posicion.x, posicion.y, "blue");
    }

    fillBackground();
    rellenarVector(vectorCanvas);
}

function BuscarCaracter(BuscarCaracter){
    $.ajax({
        url: "http://127.0.0.1:8000/caracter" ,
        type: "GET",
        async: false,
        success: function(response) {
            response.forEach((c) => {
                if(c.caracter == BuscarCaracter){
                    repetido=false;
                }
            });
        },
    });
    return repetido;
}

function fetchCaracteres() {
    $.ajax({
        url: "http://127.0.0.1:8000/caracteres" ,
        type: "GET",
        success: function(response) {
            let caracter = "";
            let caracterFinal="";
            let cont=0;
            let cont1=0;
            let contResultadovsBase=0;
            let datos=response.length;// 6 ---2 cordenadas del a y 2 coordenas b, 2 del c
            llenarAuxiliar(matrizAux);
            response.forEach((c) => {
                cont1+=1;
                if(cont1==datos){
                        vectorCaracter[Number(c.ejey*horizontal)+Number(c.ejex)]=1;
                        Transpuesta_Identidad(matrizTranspuesta,vectorCaracter);
                        MatrizPesos(matrizTranspuesta,matrizAux);
                }else{

                    if(c.caracter!=caracter){
                        caracter=c.caracter;// camnbia el caracter
                       // console.log(caracter);
                        if(cont!=0){
                        Transpuesta_Identidad(matrizTranspuesta,vectorCaracter);
                        MatrizPesos(matrizTranspuesta,matrizAux);
                        cont=0;
                        }
                        matrizTranspuesta=[];
                        vectorCaracter=[];
                        rellenarVector(vectorCaracter);
                        cont=1;
                    }

                    vectorCaracter[Number(c.ejey*horizontal)+Number(c.ejex)]=1;
                }

            });
            //console.log('Matriz de Pesos');
            convertirMatriz(matrizAux,vertical*horizontal,vertical*horizontal);

                do {
                //console.log('Vector Entrante')
                //console.log(vectorCanvas);
                VectorResultado_Escalonado(vectorCanvas,matrizAux);
                //console.log('Vector Saliente')
                //console.log(vectorResultado);
                  } while (!CompararVectores(vectorCanvas,vectorResultado));
                //console.log()

                //Compara el resultado con los de la base

            caracter = "";
            cont=0 ;
            cont1=0;

            response.forEach((c) => {
                cont1+=1;
                if(cont1==datos){
                        vectorCaracter[Number(c.ejey*horizontal)+Number(c.ejex)]=1;

                        for (let x = 0; x < (vertical*horizontal); x++) {
                            if(vectorCaracter[x]==vectorResultado[x])
                            contResultadovsBase++;
                        }
                        if(contResultadovsBase==vertical*horizontal){
                                caracterFinal=c.caracter;
                            }
                            contResultadovsBase=0;
                }else{

                    if(c.caracter!=caracter){

                        if(cont!=0){
                            for (let x = 0; x < (vertical*horizontal); x++) {
                                if(vectorCaracter[x]==vectorResultado[x])
                                contResultadovsBase++;
                            }
                            if(contResultadovsBase==vertical*horizontal){
                                caracterFinal=caracter;
                            }
                            contResultadovsBase=0;
                        cont=0;
                        }
                        caracter=c.caracter;
                        vectorCaracter=[];
                        rellenarVector(vectorCaracter);
                        cont=1;
                    }

                    vectorCaracter[Number(c.ejey*horizontal)+Number(c.ejex)]=1;
                }

            });

            texto = "El caracter al que se parece es: "+caracterFinal;
            console.log(texto);
            decir();
        },
    });

}
function decir(){
    speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
}

function drawSquare(x, y, color) {

    context.fillStyle = color;
    var rx = x * gw;
    var ry = y * gh;
    context.fillRect(rx, ry, gw, gh);
}

function fillBackground() {
    context.fillStyle = '#FFFFFF';
    context.fillRect(0, 0, 300, 300);
    agregar = [];
}

// rellena el vector del canvas en -1
function rellenarVector(vectorX){
    for (let index = 0; index < (vertical*horizontal); index++) {
        vectorX[index]=-1;
    }
}

//Realizar la transpuesta y diagonales en 0
function Transpuesta_Identidad(matrizTranspuesta, matrizX){
    for (let x = 0; x < (vertical*horizontal); x++) {
        for (let y = 0; y < (vertical*horizontal); y++) {
            if(x==y)
            matrizTranspuesta[Number(x*vertical*horizontal)+Number(y)]=0;
            else
            matrizTranspuesta[Number(x*vertical*horizontal)+Number(y)]=Number(matrizX[x])*Number(matrizX[y]);
        }
    }
}

//copiar la matriz transpuesta con identidad en un auxiliar

function CopyAuxiliar(matrizTranspuesta, matrizAux){
    for (let x = 0; x < (vertical*horizontal); x++) {
        for (let y = 0; y < (vertical*horizontal); y++) {
            matrizAux[Number(x*vertical*horizontal)+Number(y)]= matrizTranspuesta[Number(x*vertical*horizontal)+Number(y)];
        }
    }
}

//obtener la matriz de pesos
function MatrizPesos(matrizTranspuesta, matrizAux){
    for (let x = 0; x < (vertical*horizontal); x++) {
        for (let y = 0; y < (vertical*horizontal); y++) {
            matrizAux[Number(x*vertical*horizontal)+Number(y)]=Number(matrizAux[Number(x*vertical*horizontal)+Number(y)])+Number(matrizTranspuesta[Number(x*vertical*horizontal)+Number(y)]);
        }
    }
}


//llenar auxiliar
function llenarAuxiliar(matrizAux){
    for (let x = 0; x < (vertical*horizontal); x++) {
        for (let y = 0; y < (vertical*horizontal); y++) {
            matrizAux[Number(x*vertical*horizontal)+Number(y)]=0;
        }
    }
}

// convierte en matriz los vectores
function convertirMatriz(matrizX,ver,hor){
    matrizString="";
    for (let x = 0; x < ver; x++) {
        for (let y = 0; y < hor; y++) {
            if(matrizX[Number(x*hor)+Number(y)]>=0)
                matrizString+='  '+matrizX[Number(x*hor)+Number(y)];
                else
                matrizString+=' '+matrizX[Number(x*hor)+Number(y)];
        }
        matrizString+="\n";
    }
    //console.log(matrizString);
}

//Determinar salida de red

function VectorResultado_Escalonado(vectorCanvas,MatrizPesos){
    let suma=0;
    for (let x = 0; x < vertical*horizontal; x++) {
        for (let y = 0; y < vertical*horizontal; y++) {
            suma+=vectorCanvas[y]*MatrizPesos[Number(x*vertical*horizontal)+Number(y)];
        }
        vectorResultado[x]=suma;
        suma=0;
    }
    for (let z= 0; z < vertical*horizontal; z++) {
        if(vectorResultado[z]>0)
            vectorResultado[z]=1;
            else
            vectorResultado[z]=-1
    }
}
//Retorna un bool que determina si la entrada es igual que la salida
function CompararVectores(vect1,vect2){
    let cont=0;
    for (let x= 0; x < vertical*horizontal; x ++) {
        if(vect1[x]==vect2[x])
           cont++;
    }
    if(cont==vertical*horizontal)
    return true;
    else{
        for (let x= 0; x < vertical*horizontal; x ++) {
            vect1[x]= vect2[x]
        }
        return false;
    }

}
