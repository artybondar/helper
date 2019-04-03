// FIX for PHP 7.2 Error: count()
$count = false;
if (!empty($item))
{
  $count = count($item);
}

// Send Curl Request
function getData($request)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $request);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
$salt = 'SALT';
$ip = 'https://IP:PORT/';

$query = "?tasktype=123&user=user";
$md5query = md5($query.$salt);
$data = getData($ip.$query.'&sign='.$md5query);
$splitStrings = preg_split('/\s+/', $data, -1, PREG_SPLIT_NO_EMPTY);
unset($data);
// операция не выполнится, если получен пустой массив, или массив с одной строкой (отказ)
if (count($splitStrings) > 1)
{
  /* Код обработки*/
}else{
  echo 'получен пустой массив';
}

// Проверка email
function validateEmail($email){
	$exp = "/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i";
	if (preg_match($exp, $email)) {
		if(checkdnsrr(array_pop(explode("@",$email)),"MX")){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}    
}

// Вызов функции
$email = 'mail@mail.ru';
if(validateEmail($email) && !empty($email)){
    echo 'Правда, есть Email';
}else{
    echo 'Ложь, нет Email';
}

// Функция вычитает пробелы и кодирует строку
function clearCrypt($str){
    $salt = 'Уникальный набор символов';
    $str = preg_replace('/\s\s+/', ' ', $str);
return sha1($str.$salt);
}

function sendEmail($to)
{
	$to = trim($to);
	if ($to === '')
	{
		return false;
	}
	$subject = 'Тема письма!';
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";
	$headers .= "From: Site <no-reply@site.ru>\r\n";
        $headers .= "Bcc: Copy Mail <no-reply@site.ru>\r\n";
	// получаем письмо
	ob_start();
	include $_SERVER['DOCUMENT_ROOT'].'/path...';//путь к файлу для отправки
	$message = ob_get_contents();
	ob_end_clean();
	// отправляем
	$success = @mail($to, $subject, $message, $headers);
	return (bool)$success;
}
