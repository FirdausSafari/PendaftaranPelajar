<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include('config.php');

      if(isset($_POST['submit'])) //ralat 1 - xde penutup bracket
      {
        $id=($_POST['id']);
        $nama_pelajar=($_POST['nama_pelajar']);
        $no_kp=($_POST['no_kp']);

        $query1=mysqli_query("INSERT into datapelajar values('$id','$nama_pelajar','$no_kp')");//ralat 2 - xde semicolon

        if ($query1)
        {
          header("location:senarai_pelajar");
        }
      }
    ?>
    <center>
      <fieldset style="width:500px;">
        <h4>Tambah Rekod Pelajar</h4>
        <form action="senarai_pelajar.php" method="post">
          ID Pelajar : <input type="text" name="id"><br> <!--ralat 3 - xde br-->
          Nama Pekerja : <input type="text" name="nama_pelajar"><br> <!--ralat 4 - pekerja tukar jadi pelajar-->
          No KP : <input type="text" name="no_kp"><br><!--ralat 5 - xde br-->
          <br><input type="submit" name="Submit" value="Submit"><br>
        </form>
      </fieldset>
  </center></body>
</html>
