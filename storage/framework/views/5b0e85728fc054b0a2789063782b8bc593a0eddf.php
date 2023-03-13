<!DOCTYPE html>
<html lang="en">
<head>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
       integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Document</title>
</head>
<body>


<div class="container-fluid rentform">

<form action="" id="request_form"  method="POST">
    <?php echo csrf_field(); ?>
    <div id="closerentform" class="fas fa-times"></div>
    <div class="sub-heading ">Customer Details</div>
    <input type="hidden" name="id">
<div class="col-12">
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
                <label for="owner_name" class="control-label">Customer Fullname</label>
                <input type="text" name="name"  id="owner_name" placeholder="Enter your name" class="form-control form-control-sm rounded-0" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
</div>

</body>
</html><?php /**PATH E:\Autozone1\resources\views/admin/servicedit.blade.php ENDPATH**/ ?>