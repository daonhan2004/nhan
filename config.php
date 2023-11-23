<?php
function pdo_get_connection()
{
    $dburl = "mysql:host=localhost;dbname=web_dulich;charset=utf8";
    $username = 'root';
    $password = ''; // config ở đây

    $andev = new PDO($dburl, $username, $password);
    $andev->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $andev;
}
function pdo_execute($sql, $sql_args = array())
{
    // $sql_args = array_slice(func_get_args(), 1);
    try {
        $andev = pdo_get_connection();
        $stmt = $andev->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($andev);
    }
}
function pdo_query($sql, $sql_args = array())
{
    // $sql_args = array_slice(func_get_args(), 1);
    try {
        $andev = pdo_get_connection();
        $stmt = $andev->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($andev);
    }
}
?>