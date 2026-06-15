<?php
// final class honda{

// }

// class car extends honda{

// }
// $c= new car();

// class honda{
//     final function cname(){
//         echo 'honda';
//     }
// }

// class car extends honda{
//      function cname(){
//         echo 'honda city';
//     }
// }
// $c= new car();
// $c->cname();


// "final" class means we can't inherit the class using the "final" keyword.

// If we try to inherit a final class, we get an error like this:
// Fatal error: Class Car may not inherit from final class (Honda) in C:\xampp\htdocs\gitdemo\php-Q-A\Final_keyword.php on line 9

// A "final" method means we can't override the method in a child class using the "final" keyword.

// If we try to override a final method, we get an error like this:
// Fatal error: Cannot override final method Honda::drive() in C:\xampp\htdocs\gitdemo\php-Q-A\Final_keyword.php on line 9

//only the final method can't be overridden, but normal (non-final) methods can be overridden, and both are inherited and usable in the child class as normal.
?>