
function typeWriter(elemento){
	const textoArray = elemento.innerHTML.split('');
	elemento.innerHTML='';
	textoArray.forEach((letra, i) =>{
		setTimeout(()=>elemento.innerHTML += letra, 75 * i);
	});
}

const titulo=document.querySelector('.pisca');
typeWriter(titulo);


// h1::after{
// 	content: '|';
// 	margin-left: 5px;
// 	opacity:1 ;
// 	animation pisca .7s infinite;
// }

// @keyframes pisca{
// 	0%,100%{
// 		opacity:1 ;

// 	}
// 	50%{
// 		opacity:0 ;

// 	}

// }
