<?php
// SESSION START
session_start();

// Formulaire de connexion
require_once '../dbConnect.php';
$dbconnect = databaseConnect();
const ERROR_REQUIRED = 'Veuillez renseigner ce champ';
const ERROR_PASSWORD_MISMATCH = 'Le mot de passe n\'est pas valide';
const ERROR_EMAIL_INVALID = 'L\'email n\'est pas valide';
const ERROR_EMAIL_UNKOWN = 'L\'email n\'est pas enregistrée';

$errors = [
    'email' => '',
    'password' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = filter_input_array(INPUT_POST, [
        'email' => FILTER_SANITIZE_EMAIL,
    ]);
    $email = $input['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$email) {
        $errors['email'] = ERROR_REQUIRED;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = ERROR_EMAIL_INVALID;
    }
    if (!$password) {
        $errors['password'] = ERROR_REQUIRED;
    }
    if (empty(array_filter($errors, fn ($e) => $e !== ''))) {
        $statementUser = $dbconnect->prepare('SELECT * FROM users WHERE email=:email');
        $statementUser->bindParam(':email', $email);
        $statementUser->execute();
        $user = $statementUser->fetch();
        if (!$user) {
            $errors['email'] = ERROR_EMAIL_UNKOWN;
        } else {
            if (!password_verify($password, $user['password'])) {
                $errors['password'] = ERROR_PASSWORD_MISMATCH;
            } else {
                $statementSession = $dbconnect->prepare('INSERT INTO session VALUES (
				DEFAULT,
				:userid
			  )');
                $statementSession->bindParam(':userid', $user['id']);
                $statementSession->execute();
                $sessionId = $dbconnect->lastInsertId();
                setcookie('session', $sessionId, time() + 60 * 60 * 24 * 14, '', '', false, true);
                $_SESSION['user'] = $user;
                header('Location: profile.php');
            }
        }
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
    <button class="back-home"><a href="../index.php">Retour à l'accueil</a></button>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="auth_login.php" method="post">
                <h1>Se connecter</h1>
                <input type="email" placeholder="Email" name="email" />
                <?php if ($errors['email']) : ?>
                    <p class="text-danger"><?= $errors['email'] ?></p>
                <?php endif; ?>
                <input type="password" placeholder="Password" name="password" />
                <?php if ($errors['email']) : ?>
                    <p class="text-danger"><?= $errors['password'] ?></p>
                <?php endif; ?>
                <a href="#">Mot de passe oublié ?</a>
                <button type="submit">Se connecter</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Ravi de vous revoir !</h1>
                    <p>Pour rester en contact avec nous, veuillez vous connecter en utilisant vos informations personnelles.</p>
                    <button class="ghost" id="signIn">Se connecter</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Bonjour !</h1>
                    <p>Saisissez vos informations personnelles et commencez votre voyage avec nous.</p>
                    <a href="/pages/auth_signin.php"><button class="ghost" id="signIn">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../public/js/forms.js"></script>
</body>

</html>