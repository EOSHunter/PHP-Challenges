?php
require('lib/inc/db.inc.php');

if(isset($_POST['submit']) && $_POST['submit'] == 'Submit') {
                try {
      $sql = "INSERT INTO `tbl_institution` (InstitutionID, Name, Address, City$
      $sql .= "VALUES(NULL, :name, :address, :city, :state, :zip, :active)";
      $stmt = $db->prepare($sql);
      $stmt->execute(array(
                           	':name'=>$_POST['name'],
                                ':address'=>$_POST['address'],
                                ':city'=>$_POST['city'],
                                ':state'=>$_POST['state'],
                                ':zip'=>$_POST['zip'],
                                ':active'=>$_POST['active'],
      ));

                } catch (PDOException $e) {
      echo $e->getMessage();
                }
}

                ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Form Processing</title>
  <style>
    div {
      padding: 10px;
    }
    </style>

</head>
<body>
  <h1>Data Insertion</h1>
  <p>Add a new college</p>
  <?php if(!isset($_GET['msg'])) { ?>
  <form action="pdo.php" method="post">
    <input type="hidden" name="hiddenValue" value="its a secret" />
    <div>
      <label for="fname">Name: <input type="text" value="" id="name" name="name$
    </div>