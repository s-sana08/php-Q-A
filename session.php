 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Session</title>
 </head>
 <body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter user name" />
        <br><br>
        <button name="btn" value="set">set session</button>
        <br><br>
        <button name="btn" value="get">display session</button>
        <br><br>
        <button name="btn" value="delete">delete session</button>
    </form>
 </body>
 </html>
 <?php
 session_start();
 if(isset($_POST['btn'])){
    if($_POST['btn']=='set'){
        $val = $_POST['user'];
        $_SESSION['user'] =$val;
        echo 'session set';
    }
    if($_POST['btn']=='get'){
        if(isset($_SESSION['user'])){
            $val = $_SESSION['user'];
            echo $val;
        }else{
            echo '<br>fist set the session to continue';
        }
        
    }
    if($_POST['btn']=='delete'){
        session_unset();
        session_destroy();
        echo 'session destroyed';
    }
 }
 
// A session stores data on the server side.
// It is used to manage user data across multiple pages of a website.
// Sessions are suitable for storing sensitive data (more secure than cookies).
// A session is started using session_start(); at the very beginning of the PHP file (before any output).
// You can destroy a session using session_destroy(); function.
//if you want to unset any session data then u can use session_unset(); function.

// Each session has a unique session ID to identify the user.
// The session ID is usually stored in the browser as a cookie (PHPSESSID).
// Session data is stored in the $_SESSION superglobal array.
// You can store multiple values in a session using $_SESSION["key"] = value.
// Session data is available until the session is destroyed or expires.

// You can remove a specific session variable using unset($_SESSION["key"]);
// Session data is temporary and is deleted after the browser is closed (by default).
// Sessions improve security compared to storing data in URLs or cookies.
// Session files are stored on the server (default location depends on server settings).

// session_start(); must be called on every page where session data is used.
// You cannot access session data without starting the session.
// Avoid storing large data in sessions as it can affect performance.
// Sessions are commonly used for login systems, shopping carts, and user tracking.


//Key Points
// Sessions store sensitive data securely on server
// Cookies store small data in browser
// Sessions use a session ID (often stored in a cookie)
// Both are used to maintain state in web applications
 ?>