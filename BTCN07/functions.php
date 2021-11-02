<?php
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