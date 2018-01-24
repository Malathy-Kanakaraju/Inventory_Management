<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Remote Skills Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Datatables library -->
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="text-center">Remote skills test</h1>
            <div class="panel panel-default col-sm-6 col-sm-offset-3">
                <div class="panel-heading">Add New Product</div>
                <div class="panel-content"><br>
                    <form class="form-horizontal" method="POST" >
                        <div class="form-group">
                            <label for="product_name" class="control-label col-sm-4">Product Name:</label>
                            <div class="col-sm-8"><input name="product_name" type="text" class="form-control"></div>
                        </div><br>
                        <div class="form-group">
                            <label for="quantity" class="control-label col-sm-4">Quantity in stock:</label>
                            <div class="col-sm-2"><input name="quantity" type="number" class="form-control"></div>
                        </div><br>
                        <div class="form-group">
                            <label for="price" class="control-label col-sm-4">Price per item (in $):</label>
                            <div class="col-sm-2"><input name="price" type="number" class="form-control"></div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-6 text-center"><button class="btn btn-default" name="reset">Reset</button></div>
                            <div class="col-sm-6 text-center"><button class="btn btn-primary" name="submit" type="submit">Submit</button></div>
                        </div><br>
                    </form>
                </div>
            </div>
            
            <div class="col-sm-8 col-sm-offset-2">
            <h2>Product Inventory</h2>
                <table class="display table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity in stock</th>
                            <th>Price per item (in $)</th>
                            <th>Total value number</th>
                            <th>Submitted Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
