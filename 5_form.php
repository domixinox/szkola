<!DOCTYPE html>
<html>
  <body>
    <h3>Dane usera</h3>
    <form method="get">
      <input type="text" name="surname"><br><br>
      <input type="submit" name="Zatwierdz"><br><br>
    </form>
    <?php
      if(!empty($_GET('surname'))){
        if(strlen(trim($_get('suranme')))!=0){
          $surname = $_GET('surname');
          echo $surname;
        }else{

        }

      }
     ?>
  </body>
</html>
