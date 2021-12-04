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

function findUserByEmail($email)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute(array($email));
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