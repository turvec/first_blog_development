<?php
 include_once "header.php"
?>

<div class="row mb-5 mt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4 card card-body">
        <form action="register_action.php" method="post">
            <div class="form-group">
                <label for="">name</label>
                <input type="text" name="name"  class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button class="btn btn-outline-primary mb-5 mt-3">SUBMIT</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>

<?php
include_once "footer.php";
?>


