<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Asegúrate de que el archivo autoload.php está en la ubicación correcta

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petfinder_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Manejar el formulario de subida
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $direccion = $_POST['direccion'];
    $calles = $_POST['calles'];
    $detalles = $_POST['detalles'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verificar si el archivo es una imagen real
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    // Verificar si el archivo ya existe
    if (file_exists($target_file)) {
        echo "Lo sentimos, el archivo ya existe.";
        $uploadOk = 0;
    }

    // Verificar el tamaño del archivo
    if ($_FILES["imagen"]["size"] > 500000) {
        echo "Lo sentimos, el archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permitir ciertos formatos de archivo
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    // Verificar si $uploadOk es 0 por algún error
    if ($uploadOk == 0) {
        echo "Lo sentimos, tu archivo no fue subido.";
    } else {
        // Si todo está bien, intentar subir el archivo
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            $image_url = $target_file;

            $sql = "INSERT INTO pets (image_url, direccion, calles, detalles) VALUES ('$image_url', '$direccion', '$calles', '$detalles')";

            if ($conn->query($sql) === TRUE) {
                echo "El registro ha sido añadido con éxito.";

                // Enviar correo electrónico usando PHPMailer
                $mail = new PHPMailer(true);

                try {
                    // Configuración del servidor SMTP
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com'; // Cambia esto según tu proveedor
                    $mail->SMTPAuth = true;
                    $mail->Username = 'nicobock15@gmail.com'; // Cambia esto con tu correo
                    $mail->Password = 'izra vmwo lnop rpad'; // Cambia esto con tu contraseña o contraseña de aplicación
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    // Remitente y destinatario
                    $mail->setFrom('nicobock15@gmail.com', 'Pet Finder');
                    $mail->addAddress('nicobock15@gmail.com'); // Cambia esto por el destinatario

                    // Contenido del correo
                    $mail->isHTML(false);
                    $mail->Subject = 'Animal en peligro';
                    $mail->Body    = "Direccion: $direccion\nEntre calles: $calles\nDetalles: $detalles";

                    // Adjuntar la imagen
                    $mail->addAttachment($target_file);

                    $mail->send();
                    echo 'Correo enviado correctamente.';
                } catch (Exception $e) {
                    echo "Error al enviar el correo: {$mail->ErrorInfo}";
                }

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Lo sentimos, hubo un error al subir tu archivo.";
        }
    }
}

$conn->close();
?>
