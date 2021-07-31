<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Регистрация</title>
			<link rel="stylesheet" href="styleRegAut.css">
			<link rel="stylesheet" href="style.css">
		</head>
	<body>
		<div>
			<form id="formReg">
				<h1>Регистрация</h1>
				<div >
					<p class="partForm">Email</p>
					<input tabindex="1" class="partFormBox" type="text" name="email">
				</div>
				<div>
					<p class="partForm">Name</p>
					<input tabindex="2" class="partFormBox" type="text" name="username">
				</div>
				<div>
					<p class="partForm">Password</p>
					<input tabindex="3" class="partFormBox" type="password" name="passOne">
				</div>
				<div>
					<p class="partForm">Repeat the password</p>
					<input tabindex="4" class="partFormBox" type="password" name="passTwo">
				</div>
				<div>
					<button class="partFormButt" type="reset">Очистить</button>
					<button class="partFormButt" type="submit">Отправить</button>
				</div>
			</form>
		</div>
	</body>
</html>