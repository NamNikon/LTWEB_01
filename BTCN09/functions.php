<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sum($a, $b)
{
    return $a + $b;
}

function findUserByID($userID)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE id=?");
    $stmt->execute(array($userID));
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function findUserByUsername($username)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE username=?");
    $stmt->execute(array($username));
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function createUser($name, $password, $username)
{
    global $db;
    $stmt = $db->prepare("INSERT INTO users (name, password, username) VALUES (?, ?, ?)");
    $stmt->execute(array($name, $username, $password));
    return findUserByID($db->lastInsertId());
}

function updatePassword($username, $password)
{
    global $db;
    $stmt = $db->prepare("UPDATE users SET password = ? WHERE username = ?");
    $stmt->execute(array($password, $username));
}

function getCurrentUser()
{
    if (isset($_SESSION['userID'])) {
        return findUserByID($_SESSION['userID']);
    }
    return null;
}

//get all posters from
function getAllPoster($uid)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM poster WHERE uid = ? ORDER BY date DESC");
    $stmt->execute(array($uid));
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function createPoster($uid, $content)
{
    global $db;
    $stmt = $db->prepare("INSERT INTO poster (uid, content) VALUES (?, ?)");
    $stmt->execute(array($uid, $content));
}

function updateAvatar($uid, $image)
{
    global $db;
    $stmt = $db->prepare("UPDATE users SET avatar = ? WHERE id = ?");
    $stmt->execute(array($image, $uid));
}



function sendEmail($to, $subject, $content)
{
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'nguyentrungnam.yn93@gmail.com';        // SMTP username
        $mail->Password   = 'n01234003050';                         // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom('nguyentrungnam.yn93@gmail.com', $subject);
        $mail->addAddress($to);     // Add a recipient

        // Content
        $mail->isHTML(true);        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;

        $mail->send();

        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}
