<!-- Add personal information supervisor to the database -->
<?php
include('config.php');
if (isset($_POST['add'])){
    $EMAIL = $_POST['email'];
    $chekEmail = $database->prepare("SELECT * FROM members WHERE email = :email ");
    $chekEmail->bindParam(":email", $EMAIL);
    $chekEmail->execute();
    if ($chekEmail->rowCount()>0){
        header("Location: Register.php");
    } else {
        $FULL_NAME = $_POST['Full_name'];
        $ADRESSE = $_POST['Adresse'];
        $EMAIL = $_POST['email'];
        $CIN = $_POST['cin'];
        $DATE = $_POST['Date']; 
        $PHON_NUMBER = $_POST['Phone_number'];
        $GENDER = $_POST['Gender'];
        $PASSWORD = $_POST['password'];

        $addData = $database->prepare("INSERT INTO members (Full_name, Adresse, email, cin, phone, type, date_naissance, password, dt_open_account) 
            VALUES (:FULL_NAME, :ADRESSE, :EMAIL, :CIN, :PHON_NUMBER, :GENDER,  :DATE, :PASSWORD, NOW())");
        $addData->bindParam(":FULL_NAME", $FULL_NAME);
        $addData->bindParam(":ADRESSE", $ADRESSE);
        $addData->bindParam(":EMAIL", $EMAIL);
        $addData->bindParam(":CIN", $CIN);
        $addData->bindParam(":PHON_NUMBER", $PHON_NUMBER);
        $addData->bindParam(":DATE", $DATE);
        $addData->bindParam(":PASSWORD", $PASSWORD);
        $addData->bindParam(":GENDER", $GENDER);
        $addData->execute();
        header("Location: Login.php");
    }
}
?>



