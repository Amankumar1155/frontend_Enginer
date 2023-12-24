<?php include'header.php'?>
<?php include'db/config.php'?>



<div class="container-fluid">

        
<div class="row" style="margin-top:40px;">
        <h3>View Product</h3>
        <div class="col-md-12" style="margin-top:20px;">
            <table class="table table-responsive">
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
<!-- 
                    <th>Status</th> -->
                </tr>

                <?php
        $sql="SELECT * FROM `product`";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
        {
        ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td style="width: 30%;"><img  style="width:60%;" src="<?php echo "../assets/images/".$row['img']?>"></td>
                    <td><?php echo $row['name']?></td>
                    <td>₹<?php echo $row['price']?></td>
                </tr>

                <?php 
                
        }
                ?>
            </table>
        </div>
    </div>

    
</div>



<?php include'footer.php'?>