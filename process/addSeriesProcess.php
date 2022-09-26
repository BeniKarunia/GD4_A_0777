<?php

    if(isset($_POST['addDataSeries'])){

        include('../db.php');

        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realease'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,"INSERT INTO series(genre, name, realease,  episode, season, synopsis)
        VALUES('$genre', '$name', '$realese', '$episode', '$season', '$synopsis')")
                or die(mysqli_error($con)); 
            if($query){
                echo
                    '<script>
                    alert("Succes Adding Series");
                    window.location = "../page/listSeriesPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Fail Adding Series");
                    </script>';
            }
    }else{
      echo
       '<script>
        window.history.back()
        </script>';
     }
?>