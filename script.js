import { Card } from "./Cards.js";

window.onload = ( ) => {
    let animaCard =new Card ()
    document.addEventListener('scroll',animaCard.scrollCard.bind(animaCard));
}