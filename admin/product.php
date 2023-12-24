<?php include'header.php'?>

<?php include'db/config.php'?>



<div class="container-fluid">
<div class="row" style="margin-top:40px;">
        <h3>Add Product</h3>
        <div class="col-md-12" style="margin-top:20px;">
            <form action="db/product.php" method="post" enctype="multipart/form-data">
            <div class="row">

                <div class="col-md-6 mt-4">
                    <label class="form-label">Image</label>
                    <input type="file" name="img" class="form-control">
                </div>
                <div class="col-md-6 mt-4">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-md-6 mt-4">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="col-md-6 mt-4">
                    <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                </div>

            </div>
            </form>
        </div>
    </div>


    
</div>



<?php include'footer.php'?>