<?php
    include '../component/sidebar.php'
?>
   <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
<div class="body d-flex justify-content-between">
    <h4>Add Data Series</h4>
</div>
    <form action="../process/addSeriesProcess.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        
        <select class = "form-select" aria-label="Default select example" name="genre" id="genre">
            <option value="Action">Action</option>
            <option value="Comedy">Comedy</option>
            <option value="Romance">Romance</option>
            <option value="Animation">Animation</option>
            <option value="Horror">Horror</option>
        </select>
        </div>

        <div class="mb-3">
            <label for="realese" class="form-label">Release</label>
            <input class="form-control" id="realease" name="realease" aria-describedby="realease">
        </div>
        <div class="mb-3">
            <label for="episode" class="form-label">Episode</label>
            <input class="form-control" id="episode" name="episode" aria-describedby="episode">
        </div>
        <div class="mb-3">
            <label for="season" class="form-label">Season</label>
            <input class="form-control" id="season" name="season" aria-describedby="season">
        </div>
        <div class="mb-3">
        <label for="synopsis" class="form-label">Synopsis</label>
        <textarea class="form-control" id="synopsis" name="synopsis" rows="3"></textarea>
    </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="addDataSeries">Add Data</button>
        </div>
    </form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</body>
</html>