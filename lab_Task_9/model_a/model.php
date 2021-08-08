<?php 

require_once 'db_connect.php';

function showAllTeacher()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `teacher` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function getAllTeacherCount_Department($dep)
{
    $conn = db_conn();
    $selectQuery = "SELECT COUNT(1) as TOTAL FROM `teacher` WHERE Department LIKE '$dep%' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows[0]['TOTAL'];
}

function showAllTeacherWithPagination_Department($page, $number_of_rows, $dep)
{
    $offset = ($page-1) * $number_of_rows;

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `teacher` WHERE Department LIKE '$dep%' LIMIT $number_of_rows OFFSET $offset";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function searchTeacher($user_name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$user_name%'";

    
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addTeacher($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into teacher (Name, Email, Username, Password, Gender, Current_Institution, Department, DOB, image)
VALUES (:name, :email, :username, :password, :gender, :ins, :dep, :dob, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':ins' => $data['ins'],
            ':dep' => $data['dep'],
            ':dob' => $data['dob'],
            ':image' => $data['image']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteTeacher($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `teacher` WHERE `ID` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
