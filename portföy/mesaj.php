<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    $to = "olcandemir7c@gmail.com"; 
    $subject = "portföy iletişim formu mesajınız var";
    $body = "İsim: $name\nE-posta: $email\n\nMesaj:\n$message";

   
    $headers = "From: $name <$email>";

    
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Mesajınız başarıyla gönderildi. En kısa sürede size geri dönüş yapılacaktır.</p>";
    } else {
        echo "<p>Maalesef, mesaj gönderirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.</p>";
    }
}
?>
