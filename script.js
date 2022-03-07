import { Animacao } from "./Animacao.js";

window.onload = ( ) => {
    let animaCard = new Animacao ()
    document.addEventListener('scroll',animaCard.scrollCard.bind(animaCard));
}