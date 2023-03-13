<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Document</title>
</head>
<body>
<style>
    #uni_modal .modal-footer{
        display:none
    }
    span.select2-selection.select2-selection--single,span.select2-selection.select2-selection--multiple {
    padding: 0.25rem 0.5rem;
    min-height: calc(1.5em + 0.5rem + 2px);
    height:auto !important;
    max-height:calc(3.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    border-radius: 0;
}
</style>

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
                <input type="text" name="name" id="owner_name" placeholder="Enter your name" class="form-control form-control-sm rounded-0" required>
            </div>
            <div class="form-group">
                <label for="owner_name" class="control-label">Customer CNIC</label>
                <input type="text" name="CNIC" id="owner_name" placeholder="Enter your CNIC" class="form-control form-control-sm rounded-0" required>
            </div>
            <div class="form-group">
                <label for="contact" class="control-label">Owner Contact #</label>
                <input type="text" name="Contact" id="contact" placeholder="Enter your contact" class="form-control form-control-sm rounded-0" required>
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Owner Email</label>
                <input type="email" name="Email" id="email" placeholder="Enter your email" class="form-control form-control-sm rounded-0" required>
            </div>
            
            <div class="form-group">
                <label for="address" class="control-label">Pick up Address</label>
                <textarea rows="3" name="Address" id="address" class="form-control form-control-sm rounded-0" placeholder="Enter your address" style="resize:none" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
</div>

</body>
</html><?php /**PATH E:\Autozone1\resources\views/editform.blade.php ENDPATH**/ ?>