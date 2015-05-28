function validaBusca() {
	if (document.querySelector('#q').value == ' ') {
		document.querySelector('#form-busca').style.background = 'red'
		return false;
	};
}
//fazendo a associação da função com o evento
document.querySelector('#form-busca').onsubmit = validaBusca;