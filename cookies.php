<form action="" method = 'post'>
    <input type="text" name="user" placeholder="enter ur name" />
    <br><br>
    <button name="btn" value="set">set cookie</button>
    <br><br>
    <button name="btn" value="display">display cookie</button>
    <br><br>
    <button name="btn" value="delete">delete cookie</button>
</form>

<?php
// $secretKey = "your-32-character-secret-key-here";
// $cipher = "AES-256-CBC";

// function setEncryptedCookie($name, $value, $expire = 0) {
//     global $secretKey, $cipher;
//     $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
//     $encrypted = openssl_encrypt($value, $cipher, $secretKey, 0, $iv);
//     $cookieValue = base64_encode($iv) . ':' . $encrypted;
//     setcookie($name, $cookieValue, $expire, "/", "", true, true);
// }

// function getDecryptedCookie($name) {
//     global $secretKey, $cipher;
//     if (!isset($_COOKIE[$name])) return null;
//     list($ivEncoded, $encrypted) = explode(':', $_COOKIE[$name], 2);
//     $iv = base64_decode($ivEncoded);
//     return openssl_decrypt($encrypted, $cipher, $secretKey, 0, $iv);
// }


// if(isset($_POST['btn'])){
//     if($_POST['btn']=='set'){
//         $val = $_POST['user'];
//         setcookie('user',$val,time() + 86400, '/');
//         // setEncryptedCookie("user", $val, time() + 3600);
//         echo 'cookie set';
//     }
//     if($_POST['btn']=='display'){
//        if(isset($_COOKIE['user'])){
//         echo $_COOKIE['user'];
//         //  echo getDecryptedCookie('user');
//         }
//     }
//      if($_POST['btn']=='delete'){
//         if(isset($_COOKIE['user'])){
//             setcookie('user',null,-1);
//         }
//     }
   
// }



// setcookie('meal','catfood');
// setcookie('animal','cat');

// if(isset($_COOKIE['meal'])){
//     echo $_COOKIE['meal'];
// }else{
//     echo 'meal is not set';
// }
// echo '<br>';
// if(isset($_COOKIE['animal'])){
//     echo $_COOKIE['animal'];
// }else{
//     echo 'animal name is not set';
// }
// print_r($_COOKIE);




/*

-cookie is a small piece of data that store on user browser.
-cookie set using setcookie() function;
-Cookies are sent automatically with every HTTP request to that domain.
-Size limit is around 4KB
-To remember your prefrences like language theme etc.
-They are domain-specific (a cookie set by google.com can't be read by facebook.com)
-In short — cookies are the browser's way of remembering things between page requests.
syntax:
-setcookie(name, value, expire, path, domain, secure, httponly);
-name is the only required parameter in setcookie(). Everything else (value, expire, path, etc.) is optional.
-Without HttpOnly → JavaScript can read the cookie.
-With HttpOnly → JavaScript cannot read the cookie.
-for encrypt cookies u need to create ur function like setEncryptedCookie then u can see the cookies is encrypted.

*/
?>