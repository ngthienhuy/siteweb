<?php
    function pdo_connect_database(){
        $dburl = "mysql:host = localhost ; dbname= webprojecte5 ; charset=utf8";
        $username = 'root';
        $password = '';

        $conn = new PDO($dburl, $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        return $conn; 
    }


    function pdo_exec($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_connect_database();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);

        }
        catch(PDOException $e){
            throw $e ;
        }
        finally{
            unset($conn);
        }
    }

    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_connect_database();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    function pdo_query_first($sql){
        $sql_args = array_slice(func_get_args(),1);

        try{
            $conn = pdo_connect_database();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetch(PDO::FETCH_ASSOC);
            return $rows;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    function pdo_query_value($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_connect_database();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
?>