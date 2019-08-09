<?php 
	if(isset($_POST['update'])){
		$product_id=$_GET['update'];
		$product_name=$_POST['product_name'];
        $product_cat_id=$_POST['product_cat_id'];
        $product_price=$_POST['product_price'];
        $description=$_POST['description'];
        $product_image=$_FILES['product_image']['name'];
        $product_image_tmp=$_FILES['product_image']['tmp_name'];
        move_uploaded_file($product_image_tmp,"../images/".$product_image);
        if(empty($product_image)){
            $query="SELECT * FROM product WHERE product_id=$product_id";
            $result=mysqli_query($conn,$query);
            confirm_query($result);
            while ($row=mysqli_fetch_assoc($result)) {
                $product_image=$row['image'];
                
            }
        }
        
        $query="UPDATE product SET product_name='$product_name',price='$product_price',description='$description',product_date=now(),image='$product_image',catid='$product_cat_id' WHERE product_id='$product_id'";
        $result=mysqli_query($conn,$query);
		confirm_query($result);
	}
?>
<?php
	if(isset($_GET['update'])){
		$product_id=$_GET['update'];
		$query="SELECT * FROM product WHERE product_id=$product_id";
		$result=mysqli_query($conn,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			$product_id=$row['product_id'];
			$product_name=$row['product_name'];
			$product_cat_id=$row['catid'];
			$product_price=$row['price'];
			$description=$row['description'];
			$product_date=$row['product_date'];
			$product_image=$row['image'];
		}
?>
<form action="" enctype="multipart/form-data" method="post">
	<div class="form-group">
		<label for="" class="control-label">Product Name</label>
		<input type="text" class="form-control" name="product_name" value="<?php echo $product_name ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Product Category Id</label>
		<input type="text" class="form-control" name="product_cat_id" value="<?php echo $product_cat_id ?>">
    </div>
	<div class="form-group">
		<label for="" class="control-label">Product Price</label>
		<input type="text" class="form-control" name="product_price" value="<?php echo $product_price ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Description</label>
		<input type="text" class="form-control" name="description" value="<?php echo $description ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Image</label>
		<input type="file" name="product_image" multiple="">
		<img src="../images/<?php echo $product_image?>" alt="" class="img-responsive" width="100px;">
	</div>
	<div class="form-group">
		<input type="submit" name="update" value="Update Products" class="btn btn-primary">
	</div>
</form>
<?php 
	}
?>
