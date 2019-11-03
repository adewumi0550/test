<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>QR COde Generator </title>
</head>
<body>
    
    <div class="container">
        <h1>Barcode Generator</h1>
        <div class="form">
            <form action="index.php" >

                
            <div class="form-group">
                    <label for="label" class="label">First Name</label><br>
                    <input type="text" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="label" class="label">Last Name</label><br>
                    <input type="text" class="form-control">
                    
                </div>
    
                <div class="form-group">
                    <label for="label" class="label">Password</label><br>
                    <input type="password" class="form-control">
                    
                </div>
    
                <div class="form-group">
                    <!-- <label for="label" class="label">First Name</label><br> -->
                    <input type="submit" class="btn btn-submit" name="submit" value="Generate Barcode">
                    
                </div>
     
            </form>       </div>
    </div>
</body>
</html>