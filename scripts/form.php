<?
if((isset($_POST['name-field'])&&$_POST['name-field']!="")&&(isset($_POST['phone-field'])&&$_POST['phone-field']!="")&&(isset($_POST['text'])&&$_POST['text']!="")){ 
//Проверка отправилось ли наше поля name и не пустые ли они

        $to = 'andreyjktl@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка с сайта'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name-field'].'</p>
                        <p>Телефон: '.$_POST['phone-field'].'</p>                        
                    	<p>Сообщение: '.$_POST['text'].'</p>
                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <andreyjktl@gmail.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>