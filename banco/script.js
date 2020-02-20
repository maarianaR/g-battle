function verifica(){
				if(document.getElementById('nome_prod').value == '' || document.getElementById('preco_prod').value == '' || document.getElementById('tipo').value == '' || document.getElementById('imagem_prod').value == '' ||  document.getElementById('console').value == '' ||
					(document.getElementById('nome_prod').value == '' && document.getElementById('preco_prod').value == ''  || document.getElementById('tipo').value == '' || document.getElementById('imagem_prod').value == '' || document.getElementById('console').value == '')){
					label1.innerHTML="Preencha os campos!";
					return false;
				}
			
			}
