class Animacao {
    constructor() {
       this.posicaoAtend     = document.getElementById('calculator') //monitora a posição do elemento
       this.posicaoVantagens = document.getElementById('Vantagens');
       this.posicaoServicos  = document.getElementById ('tools');
       this.Atende           = document.querySelector('.Atendimento'); //seleciona elemento a ser animado
       this.cardvant         = document.querySelector('.card-vant');
       this.cardserv         = document.querySelector('.card-serv');   
    }

    scrollCard() {
        window.requestAnimationFrame (this.CalculoScroll.bind(this));
        window.requestAnimationFrame (this.CalculoScroll1.bind(this));
        window.requestAnimationFrame (this.CalculoScroll2.bind(this));
    }
    //Cards aparecendo da esquerda para direita de acordo com a posição da tela
    CalculoScroll() {
        const posicao =  this.posicaoVantagens.getBoundingClientRect()['y']
        console.log(posicao);
        if (posicao >= 70) {
        this.cardvant.style.transform =`translate(${((-posicao )+ 70)/10}%)`;
        
        }
    }
    // Cards aparecendo da direita para esquerda de acordo com a posção da tela
    CalculoScroll1(){
        const posicao = this.posicaoServicos.getBoundingClientRect()['y']
        console.log(posicao);
        if (posicao >= 108) {
        this.cardserv.style.transform =`translate(${((posicao )- 108)/10}%)`;
        }
    }
    CalculoScroll2(){
        const posicao = this.posicaoAtend.getBoundingClientRect()['y']
        console.log(posicao);
        if (posicao <= 111){
        this.Atende.style = "visibility: visible;";
        }else{
        this.Atende.style = "visibility: hidden;";    
        }
    }
    
}

export { Animacao }