
class Animacao {
    constructor() {
       this.posicaoAtend     = document.getElementById('calculator') //monitora a posição do elemento
       this.posicaoVantagens = document.getElementById('Vantagens');
       this.posicaoServicos  = document.getElementById ('tools');
       this.Atende           = document.querySelector('.Atendimento'); //seleciona elemento a ser animado
       this.cardvant         = document.querySelector('.card-vant');
       this.cardserv         = document.querySelector('.card-serv'); 
       this.flutuante        = document.querySelector('.B-flutuante');  
    }

    scrollCard() {
        window.requestAnimationFrame (this.CalculoScroll.bind(this));
        window.requestAnimationFrame (this.CalculoScroll1.bind(this));
        window.requestAnimationFrame (this.CalculoScroll2.bind(this));
        window.requestAnimationFrame (this.CalculoScroll3.bind(this));
    }
    //Cards  Vantagens aparecendo da esquerda para direita de acordo com a posição da tela
    CalculoScroll(){
        const posicao =  this.posicaoVantagens.getBoundingClientRect()['y']
        console.log(posicao);
        if (posicao >= 70) {
        this.cardvant.style.transform =`translate(${((-posicao )+ 70)/10}%)`;
        
        }
    }
    // Cards SERVIÇOS aparecendo da direita para esquerda de acordo com a posção da tela
    CalculoScroll1(){
        const posicao = this.posicaoServicos.getBoundingClientRect()['y']
        //console.log(posicao);
        if (posicao >= 108) {
        this.cardserv.style.transform =`translate(${((posicao )- 108)/10}%)`;
        }
    }
    // Informações de orçamento aparecendo quando atingir certa ponto da pagina
    CalculoScroll2(){
        const posicao = this.posicaoAtend.getBoundingClientRect()['y']
        //console.log(posicao);
        if (posicao <= 118){
        this.Atende.style = "opacity: 1; transition: opacity 1s ease-out";

        }else{
        this.Atende.style = "opacity: 0; transition: opacity 1s ease-out";    
        }
    }
    // revelar botão "voltar ao topo ao atingir certo ponto da pagina"
    CalculoScroll3(){
        const posicao = this.posicaoServicos.getBoundingClientRect()['y']
       // console.log (posicao);
        if (posicao >= 120){
            this.flutuante.style = "visibility: hidden; transition: opacity 1s ease-out";
        }else{
           this.flutuante.style  = "opacity: 1; transition: opacity 1s ease-out";
        }
    }
}

export { Animacao }