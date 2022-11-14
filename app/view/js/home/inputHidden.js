let dataHidden = document.getElementById('dataHidden');
let horaHidden = document.getElementById('horaHidden');



function inputHidden(){
    let dataAtual = new Date().toLocaleDateString();
    let horaAtual = new Date().toLocaleTimeString();

    dataHidden.value=dataAtual;
    horaHidden.value=horaAtual;
}
