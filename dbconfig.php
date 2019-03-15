<?php

// use Medoo\Medoo;

// $database = new Medoo([
//     'database_type' => 'mssql',
//     'database_name' => 'hris',
//     'server' => '45.77.249.35,1433',
//     'username' => 'sa',
//     'password' => '1020304050',
// ]);

$myServer = '45.77.249.35,1433';
$myUser = 'sa';
$myPass = '1020304050';
$myDB = 'hris';

//connection to the database
$dbhandle = mssql_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer");

//select a database to work with
$selected = mssql_select_db($myDB, $dbhandle)
  or die("Couldn't open database $myDB");

//declare the SQL statement that will query the database
$query = 'SELECT id, name, year ';
$query .= 'FROM cars ';
$query .= "WHERE name='BMW'";

//execute the SQL query and return records
$result = mssql_query($query);

$numRows = mssql_num_rows($result);
echo '<h1>'.$numRows.' Row'.($numRows == 1 ? '' : 's').' Returned </h1>';

//display the results
while ($row = mssql_fetch_array($result)) {
    echo '<li>'.$row['id'].$row['name'].$row['year'].'</li>';
}
//close the connection
mssql_close($dbhandle);
