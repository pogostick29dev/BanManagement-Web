<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <title>BanManagement - Add/Edit Ban</title>
    </head>

    <body>
        <div class="jumbotron">
            <div class="container">
                <h1>Add/Edit Ban</h1>
            </div>
        </div>

        <div class="container">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="uuid" placeholder="UUID" class="form-control"/>
                </div>

                <div class="form-group">
                    <input type="datetime" name="date" placeholder="Date" class="form-control"/>
                </div>

                <div class="form-group">
                    <input type="text" name="reason" placeholder="Reason" class="form-control"/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>
            </form>
        </div>
    </body>
</html>