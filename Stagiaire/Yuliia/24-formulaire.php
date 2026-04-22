<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex; 
            justify-content: center; 
            align-items: center; 
             height: 100vh; 
        }
      .container{
            background: white;
            padding: 25px;
            border-radius: 10px;
            width: 320px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
   
        label {
            display: block;
            margin-top: 10px;
        }
        
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
         button{
          cursor:pointer;
          padding: 5px;
          background-color: #bde0fe;
          border-radius:5px;
          margin-bottom: 10px;
         }
         button:hover{
          background-color: #ffc8dd;
         }
    </style>
</head>
<body>
<div class="container">

<form action="24-formulaire.php" method="POST">
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email">
    <label for="message">Message :</label>
    <textarea id="message" name="message"></textarea>
    <button type="submit">Envoyer</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!empty(trim($nom)) && $email !== false && !empty(trim($message))) {
        echo "✅ Message envoyé avec succès !";

    } else {
        echo "❌ Veuillez remplir tous les champs correctement.";
}}
?>
</div>
</body>
</html>