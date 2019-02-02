<div class="container event-mgr">

        <h1 style="text-align: center">EVENT MANAGEMENT</h1>

        <h2><?php echo $div; ?></h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Acara</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($results as $print) { ?>
                
            <tr>
              <th scope="row"><?php echo $print->id; ?></th>
              <td><?php echo $print->acara; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

        <br><br>

        <form method="POST">
            <div class="input-group mb-3">
                <input type="hidden" name="divisi" value="<?php echo $div; ?>">
                <input type="text" class="form-control" placeholder="Masukkan nama acara..." aria-label="Masukkan nama acara..." aria-describedby="button-addon2" name="acara">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="insertEvent">Tambah acara</button>
                </div>
            </div>
        </form>

        
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>