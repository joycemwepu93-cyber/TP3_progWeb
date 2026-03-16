<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['tel']);
    $besoin = htmlspecialchars($_POST['need']);
    $details = htmlspecialchars($_POST['message']);

    echo "<div style='background: #0f172a; color: white; padding: 20px; font-family: sans-serif; border-radius: 10px; max-width: 600px; margin: 20px auto;'>";
    echo "<h2 style='color: #38bdf8; '>Demande reçue !</h2>";
    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Téléphone :</strong> $telephone</p>";
    echo "<p><strong>Besoin :</strong> $besoin</p>";
    echo "<p><strong>Projet :</strong> $details</p>";
    echo "<hr style='border-color: brown'>";
    echo "<a href='index.php' style='color: #38bdf8; text-decoration: none;'>Retourner au formualaire</a>";
    echo "</div>";

} else {

    header("Location: index.php");
    exit();
}
?>