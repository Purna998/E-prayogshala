<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="insert_about.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <label for="">Title</label>
                    <input name="ttl" type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="">description</label>
                    <textarea class="form-control" name="desc" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <br>
            <label for="">File Upload</label>
            <input type="file">
            <br>
            <input type="submit" name="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
    
</body>
</html>