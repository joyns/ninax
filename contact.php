<?php

$field_name = $_POST['InputName'];

$field_email = $_POST['InputEmail'];

$field_message = $_POST['InputMessage'];



$mail_to = 'ninax021@gmail.com';

$subject = 'Poruka sa sajta Ninax';



$body_message = 'Od: '.$field_name."\n";

$body_message .= 'E-mail: '.$field_email."\n";

$body_message .= 'Tekst poruke: '.$field_message;

$headers = array("From: office@ninax.rs",
    "Reply-To: office@ninax.rs",
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);




$mail_status = mail($mail_to, $subject, $body_message, $headers);



if ($mail_status) { ?>

	<script language="javascript" type="text/javascript">

		alert('Vasa poruka je uspesno poslata. Kontaktiracemo vas u najkracem roku.');

		window.location = 'kontakt.php';

	</script>

<?php

}

else { ?>

	<script language="javascript" type="text/javascript">

		alert('Doslo je do greske, poruka nije poslata.');

		window.location = 'kontakt.pho';

	</script>

<?php

}

?>
