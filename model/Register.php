<?php
class Register {
    public function registerUser()
    {
        $control = array(0 => false, 1=> 'error');
        if (isset($_POST['save'])) {
            $errorString = '';
            $name = $_POST['name'];
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            if (!$email) {
                $errorString .= 'Неправильный email<br/>';
            }
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            if (!$password || mb_strlen($password) < 6) {
                $errorString .= 'Пароль должен быть больше 6 символов <br/>';
            }
            if ($password != $confirm) {
                $errorString .= 'Пароли не совпадают <br>';
            }
            if (mb_strlen($errorString) == 0) {
                $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $date = Date('Y-m-d');

                $sql = "INSERT INTO `users` (`id`, `name`, `email`, `parol`, `status`, `registration_date`)
                VALUES (NULL, '$name', '$email', '$passwordHash', 'user', '$date')";
                $db = new Database();
                $item = $db->executeRun($sql);
                if ($item) {
                    $control = array(0 => true);    
                }
                else {
                    $control = array(0 => false, 1 => 'error');    
                }
            }
            else {
                $control = array(0 => false, 1 => $errorString);
            }
        }
        
        return $control;
    }
}
?>