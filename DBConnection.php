<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnection
 *
 * @author VINAYAK
 */
class DBConnection {
    
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "Canely_Dev";
    var $mysqliConnection;

    function Connect()
    {
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        
        if($mysqli->connect_errno)// testing the connection
        {
                die ("Cannot connect to the database");
        }
        else
        {
            /* @var $mysqliConnection type */
            //$this->$mysqliConnection = $mysqli;
            $mysqliConnection = $mysqli;
               
        }
        return $mysqli;
    }
    
    function GetMysqliConnection()
    {
        return $mysqliConnection;
    }
    
    function ExecuteQuery($query)
    {
        if(!$mysqliConnection->query($query))
        {
            echo "CALL failed: (" . $mysqliConnection->errno . ") " . $mysqliConnection->error;
            return false;
        }
        else
        {
            return true;
        }
    }
    
    function CloseConnection() // close the connection
    {
        mysqli_close($this->mysqliConnection);
        echo "Connection closed";
    }
}
