<?php
	include('var_index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Akashi Yuji</title>
</head>
<body>
	<div class="ficha">
		<div id="buttons_page">
			<button onclick="mostrar(['#buttons_page','#pagea'],1)" class="button_page">Estatisticas</button>
			<button onclick="mostrar(['#buttons_page','#pageb'],1)" class="button_page">Skills</button>
			<button onclick="mostrar(['#buttons_page','#pagec'],1)" class="button_page">Inventario</button>
			<button onclick="mostrar(['#buttons_page','#paged'],1)" class="button_page">Transformações e invocações</button>
			<button onclick="mostrar(['#buttons_page','#pagee'],1)" class="button_page">ADM</button>
		</div>
		<div id="pagea" class="page">
			<button onclick="mostrar(['#pagea','#buttons_page'],1)" class="exit">X</button>
			<div class="dados">
				<div class="principal">
					<span>
						<label class="lab">Nome:  Akashi Yuji</label>
						<label class="lab">Nivel: <input type="number" min="0" value="0" name="nilvel"></label>
					</span>
					<span>
						<label class="lab">Idade: <input type="number" min="0" value="0" name="nilvel"></label>
						<label class="lab">Class: <input type="text" name="class" value="..."></label>
					</span>
				</div>
				<div class="secundario">
					<label class="lab">Hp (%)
						<input id="vida" type="number" name="vidapor" value="100" min="0" max="100">
						<div id="vidabar" class="bar"></div>
					</label>
					
					<label class="lab">Mp (%)
						<input id="mana" type="number" name="manapor" value="100" min="0" max="100">
						<div id="manabar" class="bar"></div>
					</label>
				</div>	
			</div>
			<hr>
			<div class="atributos">
				<div class="separador">
					<label class="lab">Força: <input type="number" min="0" value="0" name="for"></label>
					<label class="lab">Agilidade: <input type="number" min="0" value="0" name="agl"></label>
					<label class="lab">Sentidos: <input type="number" min="0" value="0" name="sen"></label>
				</div>
				<div class="separador">
					<label class="lab">Vitalidade: <input type="number" min="0" value="0" name="vit"></label>
					<label class="lab">Inteligência: <input type="number" min="0" value="0" name="int"></label>
					<label class="lab">Velocidade: <input type="number" min="0" value="0" name="vel"></label>
				</div>
			</div>
		</div>
		<div id="pageb" class="page">
			<button onclick="mostrar(['#pageb','#buttons_page'],1)" class="exit">X</button>
			<div class="mostruario">
				<?php
					if(isset($skill)){
						for ($i=0; $i<count($skill); $i++){ 
							$txthp = array(
								"'",
								"Habilidades_".($i+1)
							);
							$resut='
								<div id="'.$txthp[1].'" class="drop">
									<div class="header">
										<div class="img" style="background-image: url('.$skill[$i]['img'].');"></div>
										<h1>'.$skill[$i]['nome'].'</h1>
										<button onclick="drop(this,'.$txthp[0].'#bodyDrop_'.$txthp[1].$txthp[0].',0,'.$txthp[0].'#'.$txthp[1].$txthp[0].')">+</button>
									</div>
									<div id="bodyDrop_'.$txthp[1].'" class="body">
										<p>'.$skill[$i]['text'].'</p>
									</div>
								</div>
							';
							echo($resut);
						}	
					}
				?>
			</div>
		</div>
		<div id="pagec" class="page">
			<button onclick="mostrar(['#pagec','#buttons_page'],1)" class="exit">X</button>
			<div class="mostruario">
				<?php
					if(isset($item)){
						for ($i=0; $i<count($item); $i++){ 
							$txthp = array(
								"'",
								"inventario_".($i+1)
							);
							$resut='
								<div id="'.$txthp[1].'" class="drop">
									<div class="header">
										<div class="img" style="background-image: url('.$item[$i]['img'].');"></div>
										<h1>'.$item[$i]['nome'].'</h1>
										<button onclick="drop(this,'.$txthp[0].'#bodyDrop_'.$txthp[1].$txthp[0].',0,'.$txthp[0].'#'.$txthp[1].$txthp[0].')">+</button>
									</div>
									<div id="bodyDrop_'.$txthp[1].'" class="body">
										<p>'.$item[$i]['text'].'</p>
									</div>
								</div>
							';
							echo($resut);
						}	
					}
				?>
			</div>
		</div>
		<div id="paged" class="page">
			<button onclick="mostrar(['#paged','#buttons_page'],1)" class="exit">X</button>
			<div class="mostruario">
				<?php
					if(isset($outros)){
						for ($i=0; $i<count($outros); $i++){ 
							$txthp = array(
								"'",
								"outros_".($i+1)
							);
							$resut='
								<div id="'.$txthp[1].'" class="drop">
									<div class="header">
										<div class="img" style="background-image: url('.$outros[$i]['img'].');"></div>
										<h1>'.$outros[$i]['nome'].'</h1>
										<button onclick="drop(this,'.$txthp[0].'#bodyDrop_'.$txthp[1].$txthp[0].',0,'.$txthp[0].'#'.$txthp[1].$txthp[0].')">+</button>
									</div>
									<div id="bodyDrop_'.$txthp[1].'" class="body">
										<p>'.$outros[$i]['text'].'</p>
									</div>
								</div>
							';
							echo($resut);
						}	
					}
				?>
			</div>
		</div>
		<div id="pagee" class="page">
			<button onclick="mostrar(['#pagee','#buttons_page'],1)" class="exit">X</button>
			<form class="newsk" method="post">
				<label class="lab">Nome da skill:</label>
				<input type="text" name="nmskll" placeholder="...">
				<label class="lab">Link da Imagem:</label>
				<input type="url" name="imgsk" placeholder="...">
				<label class="lab">Descrição:</label>
				<textarea name="des">...</textarea>
				<input type="submit" name="newskill" value="Criar skill">
			</form>
		</div>
	</div>
	<script type="text/javascript">
		document.querySelector('#vida').addEventListener('input',()=>{
			let div = document.querySelector('#vidabar');
			let value = document.querySelector('#vida').value;
			div.style.width = value+'%';
		});
		document.querySelector('#mana').addEventListener('input',()=>{
			let div = document.querySelector('#manabar');
			let value = document.querySelector('#mana').value;
			div.style.width = value+'%';
		});
		function mostrar(ocu, chave){
			for (var i=0; i<ocu.length; i++){
				if (i<chave){
					ocultar(ocu[i], 0);	
				}else{
					ocultar(ocu[i], 1);
				};	
			};
		};
		function ocultar(obj, es) {
			let div = document.querySelector(obj);
			if(es==1){
				div.style.display = 'flex';
			}else{
				div.style.display = 'none';
			};
		};
		function drop(bt, id, fun, body){
			var op = [1,0];
			var res = 0;
			let drop = document.querySelector(id);
			let redmension = document.querySelector(body);
			if(fun==0){
				res=1;
				drop.style.display = 'flex';
				redmension.style.height = '28vh';
			}else{
				redmension.style.height = '8vh';
				drop.style.display = 'none';
			}	
			let onclick = "drop(this,'"+id+"',"+res+",'"+body+"')";
			bt.setAttribute('onclick', onclick);
		}
	</script>
</body>
</html>