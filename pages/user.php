<?php
// Connexion à la base de données
require_once "../dbConnect.php";

// Formulaire d'inscription
const ERROR_REQUIRED = 'Veuillez renseigner ce champ';
const ERROR_TOO_SHORT = 'Ce champ est trop court';
const ERROR_PASSWORD_TOO_SHORT = 'Le mot de passe doit faire au moins 6 caractères';
const ERROR_PASSWORD_MISMATCH = 'Le mot de passe de confirmation est différent';
const ERROR_EMAIL_INVALID = 'L\'email n\'est pas valide';
$errors = [
	'name' => '',
	'email' => '',
	'password' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$input = filter_input_array(INPUT_POST, [
		'name' => FILTER_SANITIZE_SPECIAL_CHARS,
		'email' => FILTER_SANITIZE_EMAIL,
	]);
	$name = $input['name'] ?? '';
	$email = $input['email'] ?? '';
	$password = $_POST['password'] ?? '';

	if (!$name) {
		$errors['name'] = ERROR_REQUIRED;
	} elseif (mb_strlen($name) < 2) {
		$errors['name'] = ERROR_TOO_SHORT;
	}
	if (!$email) {
		$errors['email'] = ERROR_REQUIRED;
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = ERROR_EMAIL_INVALID;
	}
	if (!$password) {
		$errors['password'] = ERROR_REQUIRED;
	} elseif (mb_strlen($password) < 6) {
		$errors['password'] = ERROR_PASSWORD_TOO_SHORT;
	}

	$dbconnect = databaseConnect();

	if (empty(array_filter($errors, fn ($e) => $e !== ''))) {
		$statement = $dbconnect->prepare('INSERT INTO users (name, email, password) VALUES (
      :name,
      :email,
      :password
    )');

		$hashedPassword = password_hash($password, PASSWORD_ARGON2ID);
		$statement->bindParam(':name', $name, PDO::PARAM_STR);
		$statement->bindParam(':email', $email, PDO::PARAM_STR);
		$statement->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
		$statement->execute();
		header('Location: /');
	}
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page de connexion</title>
	<link rel="stylesheet" href="../public/css/forms.css">
</head>

<body>
	<?php
	include '../include/navbar.php';
	?>
	<div class="container right-panel-active" id="container">
		<div class="form-container sign-up-container">
			<form action="" method="post">
				<h1>Creer un compte</h1>
				<input type="text" placeholder="Nom" name="name" />
				<?php if ($errors['name']) : ?>
					<p class="text-danger"><?= $errors['name'] ?></p>
				<?php endif; ?>
				<input type="email" placeholder="Email" name="email" />
				<?php if ($errors['email']) : ?>
					<p class="text-danger"><?= $errors['email'] ?></p>
				<?php endif; ?>
				<input type="password" placeholder="Password" name="password" />
				<?php if ($errors['password']) : ?>
					<p class="text-danger"><?= $errors['password'] ?></p>
				<?php endif; ?>
				<button>S'inscrire</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="/auth_login.php">
				<h1>Se connecter</h1>
				<input type="email" placeholder="Email" />
				<?php if ($errors['email']) : ?>
					<p class="text-danger"><?= $errors['email'] ?></p>
				<?php endif; ?>
				<input type="password" placeholder="Password" />
				<?php if ($errors['email']) : ?>
					<p class="text-danger"><?= $errors['password'] ?></p>
				<?php endif; ?>
				<a href="#">Mot de passe oublié ?</a>
				<button>Se connecter</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<a href="../auth_login.php"><button class="ghost" id="signIn">Se connecter</button></a>
				</div>
			</div>
		</div>
	</div>
	<script src="../public/js/forms.js"></script>
</body>