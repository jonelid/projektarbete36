<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Registrera - Nationsdejten</title>
    <link rel = "stylesheet" type="text/css" href = "design.css">
</head>
<body>
    <h1 id = "rubrik">Nationsdejten</h1>
    <h2 id = "uRubrik">- En dejtingsajt för studenter</h2>
    <div class = "BoxClass">
        <fieldset id = "fieldset">
            <legend id = "legend"><fieldset id = "innerFieldset">Registrera</fieldset></legend>
            <form method = "POST" action = "registration.php">
            
                <label for = "username">Användarnamn:</label>
                <input type = "text" placeholder = "Användarnamn här..">
                <br>
                
                <label for = "firstname">Förnamn: </label>
                <input type = "text" name = "fname" placeholder = "Förnamn här..">
                <br>
                
                <label for = "lastname">Efternamn: </label>
                <input type = "text" name = "ename" placeholder = "Efternamn här..">
                <br>
                
                <label for = "email">E-mail:</label>
                <input type = "text" name = "email" placeholder = "E-mail här..">
                <br>
                
                <label for = "instution">Instution:</label>
                <input type = "text" name = "inst" placeholder = "Inmstution här..">
                <br>
                
                <label for = "nation">Nation:</label>
                <input type = "text" name = "nation" placeholder = "Nation här..">
                <br>
                
                <label for = "about">Om dig:</label>
                <input type = "text" placeholder = "Om dig...">
                <br>
                
                <label for = "password">Lösenord:</label>
                <input type = "password" name = "password" placeholder = "Lösenord här..">
                <br>
                <br>
                
                <input type= "submit" value ="Registrera" class = "Knapp1">
                <br><br>
                
                </div>
            </form>
              <?php

$conn = new mysqli("dbtrain.im.uu.se", "dbtrain_308", "mzyhny", "dbtrain_308");
if ($conn->connect_error)
 {
    die("Connection failed: ". $conn->connect_error);
 } 

$sql = "INSERT INTO UserInfo (Firstname, Secondname, Email, Institution, Nation, Password)
VALUES ('$_POST[fname]','$_POST[ename]','$_POST[email]','$_POST[inst]', '$_POST[nation]', '$_POST[password]')";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
        </fieldset>
    </div>
</body>
</html>
