<!DOCTYPE html>
<html>
<head>
    <title>Insert Image into MySQL Database using PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br/>
<div class="container">
    <div class="col-xs-8 col-xs-offset-2 well" style="background:none;">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <legend>Please Choose Image to Upload</legend>
        <div class="form-group">
            <input type="file" name="glryimage" accept="image/*" />
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Upload Image" class="btn btn-danger"/>
        </div>
        <?php if(isset($_GET['st'])) { ?>
            <div class="alert alert-danger text-center">
            <?php if ($_GET['st'] == 'success') {
                    echo "Image uploaded successfully!!!";
                }
                else
                {
                    echo 'Error uploading image...';
                } ?>
            </div>
        <?php } ?>
    </form>
    </div>
</div>
</body>
</html>