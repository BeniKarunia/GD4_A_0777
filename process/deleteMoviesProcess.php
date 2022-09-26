<?php
    session_start();
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM movies WHERE id='$id'") or
die(mysqli_error($con));
        if($queryDelete){
            echo
                '<script>
                alert("Success Deleting Data"); window.location = "../page/listMoviesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Fail Deleting Data"); window.location = "../page/listMoviesPage.php"
                </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
