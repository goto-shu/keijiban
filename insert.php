<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;" ,"root",""); 

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");


header("Location:http://localhost/4each_keijiban/index.php");


?>


//while ($row = $stmt->fetch()) {
        echo $row['handlename'];
        echo $row['title'];
        echo $row['comments'];
      }

      //<?php
              //echo "<div class='kiji'>";
             // echo "<div class='kiji1'>";
              //echo "<h2>タイトル</h2>";
              //echo "記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
                    //記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                    //記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                    //記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br> ";
              //echo "<div class='handlename'>posted by 通りすがり</div>";
              //echo "</div>";
              //echo "</div>";
              //?>