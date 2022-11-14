let data = document.getElementById('data');
let hora = document.getElementById('hora');
var dataAtual;
var horaAtual







function animeTime(){
    dataAtual = new Date().toLocaleDateString();
    horaAtual = new Date().toLocaleTimeString();
    data.innerText = dataAtual;
    hora.innerText = horaAtual;
}

setInterval(animeTime, 1000);