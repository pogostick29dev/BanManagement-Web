<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <title>BanManagement - Ban</title>
    </head>

    <body>
        <?php
            require("api/api.php");

            $ban = get_by_id($_GET["id"]);
        ?>

        <div class="jumbotron">
            <div class="container">
                <h1>Ban #<?php echo $ban["id"] ?></h1>
            </div>
        </div>

        <div class="container">
            <div class="col-lg-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">Manage</div>
                    <div class="panel-body">
                        <div class="form-inline">
                            <input type="button" value="Edit" onclick="location.href = 'addban.php?id=<?php echo $ban["id"] ?>'" class="btn btn-warning"/>
                            <input type="button" value="Delete" onclick="location.href = 'api/remove.php?id=<?php echo $ban["id"] ?>'" class="btn btn-danger"/>
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
                        <td><?php echo $ban["uuid"] ?></td>
                        <td><?php echo $ban["date"] ?></td>
                        <td><?php echo $ban["reason"] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>