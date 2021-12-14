<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ARTSHARE</title>
</head>
<body>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
		*{
			border: 0;
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: "Poppins",sans-serif;
			overflow-y: hidden;
			overflow-x: hidden;
}
	body{
	background: url(archare.jpg);
	background-repeat: no-repeat;
	min-height: 100vh;
	min-width: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
}

	main.container{
	background: white;
	max-width: 400px;
	max-height: 100vh;
	padding: 2rem;
	box-shadow: 5px 5px 15px;
	border-radius: 8px;
}

	main h1{
	font-weight: 600;
	margin-bottom: 2rem;
	position: relative;
}

form .input-field:first-child{
	margin-bottom: 1.5rem;
}

.input-field .underline::before{
	content: '';
	position: absolute;
	height: 1px;
	width: 100%;
	bottom: -5px;
	left: 0;
	background: rgba(0, 0, 0, 0.2);
}

.input-field .underline::after{
	content: '';
	position: absolute;
	height: 1px;
	width: 100%;
	bottom: -5px;
	left: 0;
	background: linear-gradient(45deg,red,blue);
	transform: scaleX(0);
	transition: all .3s ease-in-out;
	transform-origin: left;
}

.input-field input:focus ~ .underline::after{
	transform: scaleX(1);
}

.input-field input{
	outline: none;
	font-size: 0.9rem;
	color: black;
}

.input-field ::placeholder{
	color: gray;
}

form input[type="submit"]{
	margin-top: 2rem;
	padding: 0.4rem;
	background: linear-gradient(to left,red,blue);
	cursor: pointer;
	color: white;
	font-size: 0.9rem;
	font-weight: 300;
	border-radius: 4px;
	transform: all 0.3s ease;
}

form input[type="submit"]:hover{
	letter-spacing: 0.5px;
	background: linear-gradient(to right,gray,pink);
}

input[type="file"]{
	margin-top: 2rem;
	padding: 0.4rem;
	background: linear-gradient(to left,orange,cyan);
	cursor: pointer;
	color: white;
	font-size: 0.9rem;
	font-weight: 300;
	border-radius: 4px;
	transform: all 0.3s ease;
}
input[type="file"]:hover{
	letter-spacing: 0.5px;
	background: linear-gradient(to right,yellow,black);
}


	</style>


 



	<main class="container">
		<h1>Envie sua Arte</h1>
		<form class="actio" action="uploadArq.php" enctype="multipart/form-data" method="post">
			<div class="input-field">
				<input type="text" name="onome" id="nome" placeholder="Nome Completo">
				<div class="underline"></div>
				</div>

				<div class="input-field">
					<input type="text" name="cidade" id="cidade" placeholder="Cidade">
					<div class="underline"></div>
					</form>

					<input type="file" name="meuArquivo">

					<input type="submit" value="Enviar Imagens">
				</div>
		
	</main>

</body>
</html>