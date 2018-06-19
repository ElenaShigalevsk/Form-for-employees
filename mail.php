<?
        $to = 'dvtimesru@ya.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения
		$bd="bd/".$_POST['position'].".dat";
		$msg = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
<p>Желаемая должность: '.$_POST['position'].'</p>
<p>Доступен с: '.$_POST['data'].'</p>
<p>Фамилия: '.$_POST['second_name'].'</p>
<p>Имя: '.$_POST['name'].'</p>
<p>Гражданство: '.$_POST['nationality'].'</p>
<p>Место рождения: '.$_POST['birthplace'].'</p>
<p>Дата рождения: '.$_POST['birthday'].'</p>


<h3>Адрес (Регистрация)</h3>

<p>Страна: '.$_POST['country'].'</p>
<p>Край/Область: '.$_POST['province'].'</p>
<p>Населенный пункт: '.$_POST['locality'].'</p>
<p>Улица/Пер-к: '.$_POST['street'].'</p>
<p>Дом/Квартира: '.$_POST['house'].'</p>


<h3>Место жительства</h3>

<p>Страна: '.$_POST['country1'].'</p>
<p>Край/Область: '.$_POST['province1'].'</p>
<p>Населенный пункт: '.$_POST['locality1'].'</p>
<p>Улица/Пер-к: '.$_POST['street1'].'</p>
<p>Дом/Квартира: '.$_POST['house1'].'</p>

<p>Контактный тел.: '.$_POST['tel'].'</p>
<p>Эл. Почта: '.$_POST['email'].'</p>

<h3>Личные данные</h3>

<p>Рост, см: '.$_POST['hgt'].'</p>
<p>Вес, кг: '.$_POST['wt'].'</p>
<p>Размер одежды: '.$_POST['clothes'].'</p>
<p>Размер обуви: '.$_POST['shoes'].'</p>


<h3>Морское образование</h3>

  <table>
   <tr>
    <th>Учебное заведение</th>
    <th>Город</th>
    <th>Специальность</th>
    <th>Документ (раб. / уч. диплом / свидетельство)</th>
    <th>Номер</th>
    <th>Дата выдачи</th>
    <th>Истекает</th>
   </tr>
   <tr>
    <td><p>'.$_POST['educational'].'</p></td>
    <td><p>'.$_POST['town'].'</p></td>
    <td><p>'.$_POST['specialty'].'</p></td>
    <td><p>'.$_POST['paper'].'</p></td>
    <td><p>'.$_POST['number'].'</p></td>
    <td><p>'.$_POST['issue'].'</p></td>
    <td><p>'.$_POST['expire'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['educational1'].'</p></td>
    <td><p>'.$_POST['town1'].'</p></td>
    <td><p>'.$_POST['specialty1'].'</p></td>
    <td><p>'.$_POST['paper1'].'</p></td>
    <td><p>'.$_POST['number1'].'</p></td>
    <td><p>'.$_POST['issue1'].'</p></td>
    <td><p>'.$_POST['expire1'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['educational23'].'</p></td>
    <td><p>'.$_POST['town23'].'</p></td>
    <td><p>'.$_POST['specialty23'].'</p></td>
    <td><p>'.$_POST['paper23'].'</p></td>
    <td><p>'.$_POST['number23'].'</p></td>
    <td><p>'.$_POST['issue23'].'</p></td>
    <td><p>'.$_POST['expire23'].'</p></td>
  </tr>

    <tr>
    <td><p>'.$_POST['educational3'].'</p></td>
    <td><p>'.$_POST['town3'].'</p></td>
    <td><p>'.$_POST['specialty3'].'</p></td>
    <td><p>'.$_POST['paper3'].'</p></td>
    <td><p>'.$_POST['number3'].'</p></td>
    <td><p>'.$_POST['issue3'].'</p></td>
    <td><p>'.$_POST['expire3'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['educational4'].'</p></td>
    <td><p>'.$_POST['town4'].'</p></td>
    <td><p>'.$_POST['specialty4'].'</p></td>
    <td><p>'.$_POST['paper4'].'</p></td>
    <td><p>'.$_POST['number4'].'</p></td>
    <td><p>'.$_POST['issue4'].'</p></td>
    <td><p>'.$_POST['expire4'].'</p></td>
  </tr>
 </table>

<h3>Документы и cправки</h3>

 <table>
   <tr>
    <th>Документ</th>
    <th>Номер</th>
    <th>Место выдачи</th>
    <th>Дата выдачи</th>
    <th>Истекает</th>
   </tr>
   <tr>
    <td><p>'.$_POST['document5'].'</p></td>
    <td><p>'.$_POST['number5'].'</p></td>
    <td><p>'.$_POST['place5'].'</p></td>
    <td><p>'.$_POST['issue5'].'</p></td>
    <td><p>'.$_POST['expire5'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['document6'].'</p></td>
    <td><p>'.$_POST['number6'].'</p></td>
    <td><p>'.$_POST['place6'].'</p></td>
    <td><p>'.$_POST['issue6'].'</p></td>
    <td><p>'.$_POST['expire6'].'</p></td>
  </tr>
   <tr>
    <td><p>'.$_POST['document7'].'</p></td>
    <td><p>'.$_POST['number7'].'</p></td>
    <td><p>'.$_POST['place7'].'</p></td>
    <td><p>'.$_POST['issue7'].'</p></td>
    <td><p>'.$_POST['expire7'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['document8'].'</p></td>
    <td><p>'.$_POST['number8'].'</p></td>
    <td><p>'.$_POST['place8'].'</p></td>
    <td><p>'.$_POST['issue8'].'</p></td>
    <td><p>'.$_POST['expire8'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['document9'].'</p></td>
    <td><p>'.$_POST['number9'].'</p></td>
    <td><p>'.$_POST['place9'].'</p></td>
    <td><p>'.$_POST['issue9'].'</p></td>
    <td><p>'.$_POST['expire9'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['document10'].'</p></td>
    <td><p>'.$_POST['number10'].'</p></td>
    <td><p>'.$_POST['place10'].'</p></td>
    <td><p>'.$_POST['issue10'].'</p></td>
    <td><p>'.$_POST['expire10'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['document11'].'</p></td>
    <td><p>'.$_POST['number11'].'</p></td>
    <td><p>'.$_POST['place11'].'</p></td>
    <td><p>'.$_POST['issue11'].'</p></td>
    <td><p>'.$_POST['expire11'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['document12'].'</p></td>
    <td><p>'.$_POST['number12'].'</p></td>
    <td><p>'.$_POST['place12'].'</p></td>
    <td><p>'.$_POST['issue12'].'</p></td>
    <td><p>'.$_POST['expire12'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['document13'].'</p></td>
    <td><p>'.$_POST['number13'].'</p></td>
    <td><p>'.$_POST['place13'].'</p></td>
    <td><p>'.$_POST['issue13'].'</p></td>
    <td><p>'.$_POST['expire13'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['document14'].'</p></td>
    <td><p>'.$_POST['number14'].'</p></td>
    <td><p>'.$_POST['place14'].'</p></td>
    <td><p>'.$_POST['issue14'].'</p></td>
    <td><p>'.$_POST['expire14'].'</p></td>
  </tr>
 </table>


<h3>Свидетельства и сертификаты</h3>

 <table>
   <tr>
    <th>Документ</th>
    <th>Номер</th>
    <th>Место выдачи</th>
    <th>Дата выдачи</th>
    <th>Истекает</th>
   </tr>
   <tr>
    <td><p>'.$_POST['sertifikat'].'</p></td>
    <td><p>'.$_POST['form-number'].'</p></td>
    <td><p>'.$_POST['form-place'].'</p></td>
    <td><p>'.$_POST['form-issue'].'</p></td>
    <td><p>'.$_POST['form-expire'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['sertifikat2'].'</p></td>
    <td><p>'.$_POST['form-number2'].'</p></td>
    <td><p>'.$_POST['form-place2'].'</p></td>
    <td><p>'.$_POST['form-issue2'].'</p></td>
    <td><p>'.$_POST['form-expire2'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['sertifikat3'].'</p></td>
    <td><p>'.$_POST['form-number3'].'</p></td>
    <td><p>'.$_POST['form-place3'].'</p></td>
    <td><p>'.$_POST['form-issue3'].'</p></td>
    <td><p>'.$_POST['form-expire3'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['sertifikat4'].'</p></td>
    <td><p>'.$_POST['form-number4'].'</p></td>
    <td><p>'.$_POST['form-place4'].'</p></td>
    <td><p>'.$_POST['form-issue4'].'</p></td>
    <td><p>'.$_POST['form-expire4'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['sertifikat5'].'</p></td>
    <td><p>'.$_POST['form-number5'].'</p></td>
    <td><p>'.$_POST['form-place5'].'</p></td>
    <td><p>'.$_POST['form-issue5'].'</p></td>
    <td><p>'.$_POST['form-expire5'].'</p></td>
  </tr>
  </table>


  <h3>Мед.заключения и справки</h3>
 <table>
   <tr>
    <th>Документ</th>
    <th>Номер</th>
    <th>Место выдачи</th>
    <th>Дата выдачи</th>
    <th>Истекает</th>
   </tr>
   <tr>
    <td><p>'.$_POST['spravka'].'</p></td>
    <td><p>'.$_POST['spravka-number'].'</p></td>
    <td><p>'.$_POST['spravka-place'].'</p></td>
    <td><p>'.$_POST['spravka-issue'].'</p></td>
    <td><p>'.$_POST['spravka-expire'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['spravka2'].'</p></td>
    <td><p>'.$_POST['spravka-number2'].'</p></td>
    <td><p>'.$_POST['spravka-place2'].'</p></td>
    <td><p>'.$_POST['spravka-issue2'].'</p></td>
    <td><p>'.$_POST['spravka-expire2'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['spravka3'].'</p></td>
    <td><p>'.$_POST['spravka-number3'].'</p></td>
    <td><p>'.$_POST['spravka-place3'].'</p></td>
    <td><p>'.$_POST['spravka-issue3'].'</p></td>
    <td><p>'.$_POST['spravka-expire3'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['spravka4'].'</p></td>
    <td><p>'.$_POST['spravka-number4'].'</p></td>
    <td><p>'.$_POST['spravka-place4'].'</p></td>
    <td><p>'.$_POST['spravka-issue4'].'</p></td>
    <td><p>'.$_POST['spravka-expire4'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['spravka5'].'</p></td>
    <td><p>'.$_POST['spravka-number5'].'</p></td>
    <td><p>'.$_POST['spravka-place5'].'</p></td>
    <td><p>'.$_POST['spravka-issue5'].'</p></td>
    <td><p>'.$_POST['spravka-expire5'].'</p></td>
  </tr>
     <tr>
    <td><p>'.$_POST['spravka6'].'</p></td>
    <td><p>'.$_POST['spravka-number6'].'</p></td>
    <td><p>'.$_POST['spravka-place6'].'</p></td>
    <td><p>'.$_POST['spravka-issue6'].'</p></td>
    <td><p>'.$_POST['spravka-expire6'].'</p></td>
  </tr>
  </table>

<h3>Опыт работы</h3>
 <table>
     <tr>
<td><p>Месяц, год поступления:</p></td>
<td><p>Месяц, год списания:</p></td>
<td><p>Должность:</p></td>
<td><p>Тип судна:</p></td>
<td><p>Судовладелец:</p></td>
<td><p>Водоизмещение:</p></td>
<td><p>Тип главного двигателя:</p></td>
 </tr>
 <tr>
<td><p>'.$_POST['experience-date'].'</p></td>
<td><p>'.$_POST['experience-date2'].'</p></td>
<td><p>'.$_POST['post'].'</p></td>
<td><p>'.$_POST['ship'].'</p></td>
<td><p>'.$_POST['shipowner'].'</p></td>
<td><p>'.$_POST['Vodoizmeshcheniye'].'</p></td>
<td><p>'.$_POST['engine'].'</p></td>
 </tr>
  <tr
<td><p>'.$_POST['experience-date2'].'</p></td>
<td><p>'.$_POST['experience-date22'].'</p></td>
<td><p>'.$_POST['post2'].'</p></td>
<td><p>'.$_POST['ship2'].'</p></td>
<td><p>'.$_POST['shipowner2'].'</p></td>
<td><p>'.$_POST['Vodoizmeshcheniye2'].'</p></td>
<td><p>'.$_POST['engine2'].'</p></td>
 </tr>
 <tr>
<td><p>'.$_POST['experience-date3'].'</p></td>
<td><p>'.$_POST['experience-date23'].'</p></td>
<td><p>'.$_POST['post3'].'</p></td>
<td><p>'.$_POST['ship3'].'</p></td>
<td><p>'.$_POST['shipowner3'].'</p></td>
<td><p>'.$_POST['Vodoizmeshcheniye3'].'</p></td>
<td><p>'.$_POST['engine3'].'</p></td>
 </tr>
 <tr>
<td><p>'.$_POST['experience-date4'].'</p></td>
<td><p>'.$_POST['experience-date24'].'</p></td>
<td><p>'.$_POST['post4'].'</p></td>
<td><p>'.$_POST['ship4'].'</p></td>
<td><p>'.$_POST['shipowner4'].'</p></td>
<td><p>'.$_POST['Vodoizmeshcheniye4'].'</p></td>
<td><p>'.$_POST['engine4'].'</p></td>
 </tr>
 <tr>
<td><p>'.$_POST['experience-date5'].'</p></td>
<td><p>'.$_POST['experience-date25'].'</p></td>
<td><p>'.$_POST['post5'].'</p></td>
<td><p>'.$_POST['ship5'].'</p></td>
<td><p>'.$_POST['shipowner5'].'</p></td>
<td><p>'.$_POST['Vodoizmeshcheniye5'].'</p></td>
<td><p>'.$_POST['engine5'].'</p></td>
 </tr>
 <tr>
<td><p>'.$_POST['experience-date6'].'</p></td>
<td><p>'.$_POST['experience-date26'].'</p></td>
<td><p>'.$_POST['post6'].'</p></td>
<td><p>'.$_POST['ship6'].'</p></td>
<td><p>'.$_POST['shipowner6'].'</p></td>
<td><p>'.$_POST['Vodoizmeshcheniye6'].'</p></td>
<td><p>'.$_POST['engine6'].'</p></td>
 </tr>
 </table>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
		
	    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@gmail.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $msg, $headers); //Отправка письма с помощью функции mail
		echo '<div class="укажитеклассздесь">Заявка успешно отправлена!</div>';



?>

