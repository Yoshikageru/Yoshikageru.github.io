<?php

    // получение данных с формы

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];



    // обработка полученных данных

    // преобразование символов в сущности 
    $fullname = htmlspecialchars($fullname);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);
    $message = htmlspecialchars($message);

    // декодирование URL
    $fullname = urldecode($fullname);
    $email = urldecode($email);
    $tel = urldecode($tel);
    $message = urldecode($message);

    // удаление пробелов символов с обеих сторон
    $fullname = trim($fullname);
    $email = trim($email);
    $tel = trim($tel);
    $message = trim($message);

    

    // отправка данных 

    if (mail("mityashov2002@gmail.com",
            "Новое письмо с сайта",
            "ФИО: ".$fullname."\n".
            "email: ".$email."\n".
            "Телефон: ".$tel."\n".
            "Сообщение: ".$message,
            "From: no-realy@mydomain.ru \r\n")
) {
    echo ('Письмо успешно отправлено');
}

else {
    echo ('Ошибка! Прверьте данные...');
}

?>