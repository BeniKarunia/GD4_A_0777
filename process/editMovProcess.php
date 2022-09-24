<?php
    if(isset($_POST['saveButton'])){

        include('../db.php');

        $id = $_POST['id'];
        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        
        $sql = "UPDATE movies SET genre='$genre', name='$name', realese='$realese', season='$season'  WHERE id=$id";

        if ($con->query($sql) === TRUE) {
          echo
                '<script>
                alert("Success Editing Movie"); window.location = "../page/listMoviesPage.php"
                </script>';
        } else {
          echo
                  '<script>
                  alert("Fail Editing Movie");
                  </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>