function modAvaliacao(){

const botao = document.querySelector("#btAvaliacao")
const modal = document.querySelector("dialog")
const close = document.querySelector("#btCloseAvaliacao")

botao.onclick = function() {
    modal.showModal()
}
close.onclick = function() {
    modal.close();
}
}