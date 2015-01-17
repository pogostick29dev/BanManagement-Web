<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <title>BanManagement - Ban</title>
    </head>

    <body>
        <div class="jumbotron">
            <div class="container">
                <h1>Ban #1</h1>
            </div>
        </div>

        <div class="container">
            <div class="col-lg-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">Manage</div>
                    <div class="panel-body">
                        <div class="form-inline">
                            <input type="button" value="Edit" onclick="location.href = 'addban.php?id=1'" class="btn btn-warning"/>
                            <input type="button" value="Delete" onclick="location.href = 'deleteban.php?id=1'" class="btn btn-danger"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-10">
                <table class="table table-bordered">
                    <tr>
                        <th>UUID</th>
                        <th>Date</th>
                        <th>Reason</th>
                    </tr>

                    <tr>
                        <td>----</td>
                        <td>01/17/15 2:38 PM</td>
                        <td>Griefing.</td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>