<?php include('./dbconfig/dbconfig.php');?>
<?php
// include header.php file
include('./header.php');
?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-7 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">Company Info</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</div>

<div class="card">
    <div class="card-header">
        <h4>Insert Data
        <a href="./indexc.php" class="btn btn-danger float-end">Back</a>
        </h4>
    </div>
    <div class="card-body">

    <form action="./codec.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Internship</label>
    <input type="text" class="form-control" name="iname" id="exampleInputEmail1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" class="form-control" name="cimage" id="exampleInputPassword1" required>
  </div>
  <button type="submit" name="save_btn" class="btn btn-primary">Submit</button>
</form>

    </div>
</div>

<?php
// include header.php file
include('./footer.php');
?>