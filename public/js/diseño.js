
document.addEventListener("DOMContentLoaded", function(event) {
    var token = $('meta[name="csrf-token"]').attr("content");
});

let modo = document.getElementById('cmb_tipo')
let btn_empezar = document.getElementById('btn_empezar')
let cmb_tipo = document.getElementById('cmb_tipo')
let caracter_actual
let caracteres_jugados = []
let modo_txt

// Consultar los caracteres
function empezar() {
    let item
    if (modo.value == 1) {
        modo_txt = 'la vocal: '
    } else if (modo.value == 2) {
        modo_txt = 'el número: '
    } else if (modo.value == 3) {
        modo_txt = 'la letra: '
    }

    $.ajax({
            url: "http://127.0.0.1:8000/caracteres/" + modo.value,
            type: "GET",
        })
        .done(function(caracteres) {
            if (caracteres_jugados.length < caracteres.length) {
                document.getElementById('lbl_felicitaciones').hidden = true
                document.getElementById('lbl_ajugar').hidden = false
                do {
                    item = caracteres[Math.floor(Math.random() * caracteres.length)]
                } while (caracteres_jugados.includes(item[0]));
                hablar('Dibuja ' + modo_txt + item[0])
                console.log('Dibuja ' + modo_txt + item[0])
                btn_empezar.innerHTML = 'Repetir <i class="fa fa-volume-up ml-1"></i>'
                btn_empezar.setAttribute('onclick', 'repetir("' + item[0] + '")')
                caracter_actual = item
            } else {
                document.getElementById('lbl_felicitaciones').hidden = false
                document.getElementById('lbl_ajugar').hidden = true
                hablar('Eres lo máximo!!, Acertaste todos los caracteres')
                btn_empezar.innerHTML = 'Empezar'
                btn_empezar.setAttribute('onclick', 'empezar()')
                caracteres_jugados = []
            }
        })
        .fail((e) => {
            console.log(e)
        });
}

function repetir(_item) {
    hablar('Dibuja ' + modo_txt + ' ' + _item)
}


function hablar(_texto) {
    speechSynthesis.speak(new SpeechSynthesisUtterance(_texto));
}

function mostrarAgregar() {
    let btn_mostrar_agregar = document.getElementById('btn_mostrar_agregar')
    btn_mostrar_agregar.innerHTML = 'Jugar'
    btn_mostrar_agregar.setAttribute('onclick', 'mostrarJugar()')
    document.getElementById('agregar_form').hidden = false;
    document.getElementById('btn_agregar').hidden = false;
    document.getElementById('btn_empezar').hidden = true;
    document.getElementById('buscar').hidden = true;
    document.getElementById('lbl_modo_juego').hidden = true;
}

function mostrarJugar() {
    let btn_mostrar_agregar = document.getElementById('btn_mostrar_agregar')
    btn_mostrar_agregar.innerHTML = 'Agregar'
    btn_mostrar_agregar.setAttribute('onclick', 'mostrarAgregar()')
    document.getElementById('agregar_form').hidden = true;
    document.getElementById('btn_agregar').hidden = true;
    document.getElementById('btn_empezar').hidden = false;
    document.getElementById('buscar').hidden = false;
    document.getElementById('lbl_modo_juego').hidden = false;
}

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({ loop: true })
    .add({
        targets: '.ml2 .letter',
        scale: [4, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: (el, i) => 70 * i
    }).add({
        targets: '.ml2',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
