class Card {
    constructor() {
       this.posicaoVantagens = document.getElementById('Vantagens');
       this.posicaoServicos  = document.getElementById ('tools');
       this.cardvant         = document.querySelector('.card-vant');
       this.cardserv         = document.querySelector('.card-serv');   
    }

    scrollCard() {
        window.requestAnimationFrame (this.CalculoScroll.bind(this));
        window.requestAnimationFrame (this.CalculoScroll1.bind(this));
    }
    CalculoScroll() {
        const posicao =  this.posicaoVantagens.getBoundingClientRect()['y']
        console.log(posicao);
        if (posicao >= 70) {
        this.cardvant.style.transform =`translate(${((-posicao )+ 70)/10}%)`;
        
        }
    }

    CalculoScroll1(){
        const posicao = this.posicaoServicos.getBoundingClientRect()['y']
        console.log(posicao);
        if (posicao >= 108) {
        this.cardserv.style.transform =`translate(${((posicao )- 108)/10}%)`;
        }
    }
    


}

export { Card }