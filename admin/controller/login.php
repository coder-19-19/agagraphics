<?php
    if (isset($_POST['submit'])){
        $email = post('email');
        $password = post('password');
        if(!$email){
            $error = 'Emailinizi daxil edin';
        }
        else if(!$password){
            $error = 'Şifrənizi daxil edin!';
        }
        else{
            $query = $db->prepare('SELECT * FROM `admin` WHERE admin_email = ?');
            $query->execute([$email]);
            $admin = $query->fetch(PDO::FETCH_ASSOC);

            if($admin){
                if(!password_verify($password,$admin['admin_password'])){
                    $error = 'Şifrənizi doğru daxil edin';
                }
                else{
                    $success = 'Uğurla giriş etdiniz yönləndirilirsiniz';
                    $_SESSION['admin_id'] = $admin['admin_id'];
                    $_SESSION['admin_name'] = $admin['admin_name'];
                    $_SESSION['admin_password'] = $admin['admin_password'];

                    header('Refresh:2;url='.admin_url());
                }
            }
            else{
                $error = 'Belə istifadəçi yoxdur';
            }
        }

    }
     require admin_view('login');