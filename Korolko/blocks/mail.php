
<?

function show_form() {
  ?> 

  <form class="contact_form" action="#" method="post" name="contact_form">
    <ul>
      <li>
       <h2>Свяжитесь с нами</h2>
       <span class="required_notification">* Поля со звездочкой обязательны для заполнения</span>
     </li>
     <li>
      <label for="name">Ваше имя:</label>
      <input id="name" type="text" name="name" placeholder="John Doe" required />
    </li>
    <li>
      <label for="email">E-mail адрес:</label>
      <input id="email" type="email" name="email" placeholder="john_doe@example.com" required pattern="[0-9a-z_]+@[0-9a-z_]+\.[a-z]{2,5}"/>
      <span class="form_hint">Например "name@something.com"</span>
    </li>
    <li>
      <label for="tel">Телефон:</label>
      <input id="tel" type="tel" name="tel" placeholder="+375111111111" required pattern="\+375[0-9]{9}" />
      <span class="form_hint">Например "+375111111111"</span>
    </li>
    <li>
      <label for="website">Тема:</label>
      <input id="website" type="text" name="tema" placeholder="Ремонт телефона" required/>

    </li>
    <li>
      <label for="message">Сообщение:</label>
      <textarea id="massage" name="message" cols="30" rows="6" required ></textarea>
    </li>
    <li>
      <button name="submit" class="submit" id="submit" type="submit" value="Отправить" onclick="f()">Отправить сообщение</button>
      
    </li>
  </ul>
</form>

<?php
}

function complete_mail() {

  $_POST['name'] = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000);
  $_POST['email'] = substr(htmlspecialchars(trim($_POST['email'])), 0, 1000);
  $_POST['tel'] = substr(htmlspecialchars(trim($_POST['tel'])), 0, 15);
  $_POST['tema'] = substr(htmlspecialchars(trim($_POST['tema'])), 0, 300);
  $_POST['message'] = substr(htmlspecialchars(trim($_POST['message'])), 0, 1000000);

  $mess = ' 
  Имя отправителя:' . $_POST['name'] . '
  email отправителя:' . $_POST['email'] . ' 
  Контактный телефон:' . $_POST['tel'] . ' 
  Тема сообщения:' . $_POST['tema'] . ' 
  ' . $_POST['message'];
    // $to - кому отправляем 
  $to = 'smartfixby@gmail.com';
    // $from - от кого 
  $from = $_POST['email'];
  mail($to, $_POST['name'], $mess, "From:" . $from);
  echo '<h1>Спасибо! Ваше письмо отправлено.</h1>'; 
}

if (!empty($_POST['submit']))
  complete_mail();
else
  show_form();


?> 

