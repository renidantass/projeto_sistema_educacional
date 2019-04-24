const senha = document.querySelector('#senha');
const csenha = document.querySelector('#csenha');
const csenha_div = document.querySelector('#csenha-div');
const formCadProf = document.querySelector('#formCadProf');
const formCadAluno = document.querySelector('#formCadAluno');


function checkPassword () {
	if (senha.value !== csenha.value) {
		if (document.querySelector('#warningIncorrectPassword') === null) {
			const warningIncorrectEl = document.createElement('p');
			warningIncorrectEl.className = 'text-danger';
			warningIncorrectEl.setAttribute('id', 'warningIncorrectPassword');
			warningIncorrectEl.innerHTML = 'Senha de confirmação não bate com a senha original';
			csenha_div.append(warningIncorrectEl);
		}
	} else {
		csenha_div.removeChild(document.querySelector('#warningIncorrectPassword'));
	}
}

function signupMember (data, url) {
	const formData = new FormData(data);
	fetch(url, {
		method: "POST",
		body: formData
	}).then(response => response.json())
		.then(response => {
			Swal.fire({
				title: 'Cadastro',
				text: `${response.message}`,
				type: `${response.status}`
				})
		});
}

csenha.addEventListener('keyup', function() {
	checkPassword();
});

try {
	formCadProf.addEventListener('submit', function (e) {
		e.preventDefault();
		signupMember(formCadProf, '../controller/cadastro_professor.php');
	});
} catch (e) {
	if (e instanceof TypeError) {
		formCadAluno.addEventListener('submit', function (e) {
			e.preventDefault();
			signupMember(formCadAluno, '../controller/cadastro_aluno.php');
		});
	}
}