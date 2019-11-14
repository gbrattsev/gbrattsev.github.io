<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cont'])) {$cont = $_POST['cont'];}
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
    if (isset($_POST['email'])) {$email = $_POST['email'];}
    if (isset($_POST['message'])) {$message = $_POST['message'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
 
    $to = "site@sitename.com"; /*Укажите адрес, га который должно приходить письмо*/
    $sendfrom   = "support@sitename.ru"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "$formData";
    $sendMessage = "$formData
    <b>Контактная информация:</b> $cont
    <b>Имя пославшего:</b> $name
    <b>E-mail:</b> $email
    <b>Телефон:</b> $tel
    <b>Текст сообщения:</b> $message";
    $send = mail ($to, $subject, $sendMessage, $headers);
    if ($send == 'true')
    {
    echo 'Сообщение отправлено! Мы свяжемся с Вами в ближайшее время!';
    }
    else
    {
    echo 'Ошибка. Сообщение не отправлено! Обновите страницу и попробуйте ещё раз, или свяжитесь с нами по указанным реквизитам.';
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}?>