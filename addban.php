<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <title>BanManagement - Add/Edit Ban</title>
    </head>

    <body>
        <?php
            require("api/api.php");

            if (isset($_GET["id"])) {
                $ban = get_by_id($_GET["id"]);
            }

            else {
                $ban = array("id" => "", "uuid" => "", "date" => "", "reason", "");
            }
        ?>

        <div class="jumbotron">
            <div class="container">
                <h1>Add/Edit Ban</h1>
            </div>
        </div>

        <div class="container">
            <form method="post" action="api/add.php">
                <div class="form-group">
                    <input type="text" name="uuid" placeholder="UUID" value="<?php echo $ban["uuid"] ?>" class="form-control"/>
                </div>

                <div class="form-group">
                    <input type="text" name="reason" placeholder="Reason" value="<?php echo $ban["reason"] ?>" class="form-control"/>
                </div>

                <input type="hidden" name="id" value="<?php echo $ban["id"] ?>"/>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>
            </form>
        </div>
    </body>
</html>