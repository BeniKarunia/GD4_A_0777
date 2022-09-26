<?php
    if(isset($_POST['saveEdit'])){
        include('../db.php');
        $id = $_POST['id'];
        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realese = $_POST['realease'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        
        $sql = "UPDATE series SET genre='$genre', name='$name', realease='$realease', episode='$episode',season='$season', synopsis='$synopsis' WHERE id=$id";

        if ($con->query($sql) === TRUE) {
          echo
                '<script>
                alert("Success Editing Series"); window.location = "../page/listSeriesPage.php"
                </script>';

        } else {
          echo
                  '<script>
                  alert("Fail Editing Series");
                  </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }

    
?>