/*
	Pega todos os elementos li da lista não ordenada
	retornando um objeto NodeList, 
	de acordo com posicionamento encontrado
	no documento

*/
var sliders  = document.querySelectorAll('#sliders li');
/*
 Define o indice, que será responsavel 
 por informar os slider atual
 */
var current  = 0;
/*
 Retorna o total de itens do slide.
 Diminui menos 1, devido o primeiro
 item começa com zero. 
 Se temos 2 items, sua posição:
 0,1,2
*/
var total    = sliders.length - 1;
/*
  Executaremos uma função num intervalo de tempo.
  E defiremos que executará em 2000 milesegundos
*/
window.setInterval(function(){
	/*
	 a variavel index será responsável pela
	 posição do elemento que iremos remover a classe
	*/
	var index =  current ? current - 1 : total;
	/*Pega o elemento pra remover a classe*/
	sliders[index].className  = '';
	/*Adiciona a classe no elemento atual*/
	sliders[current].className  = 'slider-active';
	/*Calcular a posição do proximo elemento que será exibido*/
	current = current >= total ? 0 : current+1; 	
}, 2000);