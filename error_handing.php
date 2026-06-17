<?php
// class myException extends Exception{
//     function showError(){
//             $error = "<br>exception msg :". $this->getMessage() .
//             "on line no" . $this->getLine();
//             return $error;
//         }
// }
// function div($n){
//     try{
//         if($n <= 0){
//             throw new Exception('<br>change the number');
//         }
//         if($n == 3){
//             throw new myException('number is 3.');
//         }
//         $div = 2 / $n;
//         echo '<br>'.$div; 
//     }catch(myException $e){
//         echo $e->showError();
//     }catch(Exception $e){
//         echo $e->getMessage();
//     }finally{
//         echo '<br> Finally Block';
//     }

// }
// div(2);
// div(0);
// div(3);


/*
Exception is a runtime error that can be handled using try-catch.
PHP provides a built-in Exception class.
Custom exceptions are created by extending Exception.
Always catch custom exceptions before the parent Exception class.

Exceptions are used to handle unexpected situations in a controlled way.
The try block contains code that may throw an exception.
The catch block handles the exception and prevents program crash.
The throw keyword is used to generate an exception manually.

Multiple catch blocks can be used to handle different types of exceptions.
The finally block (optional) always executes whether an exception occurs or not.
Exception handling improves program stability and readability.

Exception class provides useful methods:
    getMessage() → returns error message
    getCode() → returns error code
    getFile() → returns file where exception occurred
    getLine() → returns line number of error

In modern PHP, both Exception and Error implement Throwable interface.
You can catch both using: catch (Throwable $e)

Exceptions are commonly used in:
    File handling
    Database operations
    User input validation
*/


//real world example
/*
class MyException extends Exception {}

function login($username, $password) {
    if (empty($username)) {
        throw new MyException("Username cannot be empty");
    }

    if (strlen($password) < 6) {
        throw new MyException("Password must be at least 6 characters");
    }

    if ($username !== "admin") {
        throw new Exception("User not found");
    }

    return "Login successful!";
}

try {
    echo login("", "123");
}
catch (MyException $e) {
    echo "Custom Error: " . $e->getMessage();
}
catch (Exception $e) {
    echo "General Error: " . $e->getMessage();
}
finally {
    echo "<br>Process completed";
}
*/

//File Handling Example
function readFileData($file) {
    if (!file_exists($file)) {
        throw new Exception("File not found");
    }

    return file_get_contents($file);
}

try {
    echo readFileData("text.txt");
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
finally {
    echo "<br>File operation completed";
}






/*
Explanation
MyException → handles validation errors (custom logic)
Exception → handles general/system errors
throw → used to generate errors
finally → always runs (cleanup, logging, etc.)
*/
?>