<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include('config.php');

      if(isset($_POST['submit'])
      {
        $id=($_POST['id']);
        $nama_pelajar=($_POST['nama_pelajar']);
        $no_kp=($_POST['no_kp']);

        $query1=mysql_query("insert into data pelajar values('$id','$nama_pelajar','$no_kp')")

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
          ID Pelajar : <input type="text" name="id">
          Nama Pekerja : <input type="text" name="nama_pelajar"><br>
          No KP : <input type="text" name="no_kp">
          <br><input type="submit" name="Submit"><br>
        </form>
      </fieldset>
  </center></body>
</html>
