<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);" >
<div class="body d-flex justify-content-between">
    <h4>MY PROFILE</h4> 
</div>
<hr>

<table class="table ">
<?php
        $query = mysqli_query($con, "SELECT * FROM users") or
die(mysqli_error($con));

            if (mysqli_num_rows($query) == 0) {
                echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
            }else{
                while($data = mysqli_fetch_assoc($query)){
                echo'
                    <form action="">
                    <div style="margin-left: 10px; margin-right: 10px;">
                    <div class="row">
                        <div class="col"> <label>Name</label>
                            <input type="text" class="form-control"  name="firstName">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div>
                        <label for="emailCS">Phone Number</label>
                        <input type="password" class="form-control" id="emailCS" placeholder="beni@gmail.com" name="emailCS">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col"> <label>Email</label>
                            <input type="text" class="form-control"  name="firstName">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col"> <label>Membership</label>
                            <input type="text" class="form-control"  name="firstName">
                        </div>
                    </div>
                    
                    </form>';
                }
            }
            ?>
</table>
  </div>
</div>
</aside>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>
