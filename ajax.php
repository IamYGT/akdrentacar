<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include("admin/include/site_db.php");
require 'admin/mailer/Exception.php';
require 'admin/mailer/PHPMailer.php';
require 'admin/mailer/SMTP.php';

if (isset($_POST['reservation'])) {
	$featuresString = '';

	if ($_POST['features']) {
		foreach ($_POST['features'] as $key => $feature) {
			$featuresString .= "{$feature['isim']}, ";
		}
	}

	$mail = new PHPMailer;
	$mail->isSMTP(); 
	$mail->SMTPDebug = 0;
	$mail->CharSet  ="utf-8";
	$mail->Encoding="base64";
	$mail->Host = "mail.akdrentacar.com";
	$mail->Port = 587; 
	$mail->SMTPSecure = 'TLS';
	$mail->SMTPAuth = true;
	$mail->Username = 'info@akdrentacar.com';
	$mail->Password = 'akd272727';
	$mail->setFrom("info@akdrentacar.com", "AKD Rent a Car");
	$mail->addAddress('info@akdrentacar.com');
	$mail->Subject = 'Yeni randevu talebi alındı!';
	$mail->msgHTML("
		Merhaba,
		<br>
		<br>
		AKDRentacar.com üzerinden yeni bir rezervasyon talebi aldınız! 
		<br>
		<br>
		Alış Tarihi: {$_POST['departure_date']} {$_POST['departure_time']}
		<br>
		Teslim Tarihi: {$_POST['arrival_date']} {$_POST['arrival_time']}
		<br>
		<br>
		<h3>Rezervasyon detayları:</h3>
		<br>
		<br>
		Araç: {$_POST['car_title']}
		<br>
		Lokasyon: {$_POST['location_title']}
		<br>
		Fiyat: {$_POST['price']}
		<br>
		Ek Özellikler: {$featuresString}
		<br>
		Ad Soyad: {$_POST['name']}
		<br>
		TC: {$_POST['tc']}
		<br>
		Telefon: {$_POST['phone']}
		<br>
		Doğum Tarihi: {$_POST['birthday']}
		<br>
		Email: {$_POST['email']}
		<br>
		Mesaj: {$_POST['message']}
		<br>
		<br>
		AKD Rent a Car
	");
	$mail->AltBody = "
		Merhaba,
		\n
		\n
		AKDRentacar.com üzerinden yeni bir rezervasyon talebi aldınız! 
		\n
		\n
		Alış Tarihi: {$_POST['departure_date']} {$_POST['departure_time']}
		\n
		Teslim Tarihi: {$_POST['arrival_date']} {$_POST['arrival_time']}
		\n
		\n
		Rezervasyon detayları:
		\n
		\n
		Araç: {$_POST['car_title']}
		\n
		Lokasyon: {$_POST['location_title']}
		\n
		Fiyat: {$_POST['price']}
		\n
		Ek Özellikler: {$featuresString}
		\n
		Ad Soyad: {$_POST['name']}
		\n
		TC: {$_POST['tc']}
		\n
		Telefon: {$_POST['phone']}
		\n
		Doğum Tarihi: {$_POST['birthday']}
		\n
		Email: {$_POST['email']}
		\n
		Mesaj: {$_POST['message']}
		\n
		\n
		AKD Rent a Car
	";

	if(!$mail->Send()){
	    echo json_encode(array('success' => false));
	} else {
	    echo json_encode(array('success' => true));
	}

} else {
	header('Location: ./');
	exit;
}
