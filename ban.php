<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <title>BanManagement - Ban</title>
    </head>

    <body>
        <?php
            require("api/api.php");
            require("header.php");

            $ban = get_by_id($_GET["id"]);
        ?>

        <div class="jumbotron">
            <div class="container">
                <h1>Ban #<?php echo $ban["id"] ?></h1>
            </div>
        </div>

        <div class="container">
            <?php if (isset($_SESSION["username"])) { ?>
                <div class="col-lg-2">
                    <div class="panel panel-warning">
                        <div class="panel-heading">Manage</div>
                        <div class="panel-body">
                            <div class="form-inline">
                                <input type="button" value="Edit" data-toggle="modal" data-target="#modal" class="btn btn-warning"/>
                                <input type="button" value="Delete" onclick="location.href = 'api/remove.php?id=<?php echo $ban["id"] ?>'" class="btn btn-danger"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="col-lg-<?php echo isset($_SESSION["username"]) ? 10 : 12 ?>">
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

        <div class="modal fade" id="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Ban</h4>
                    </div>
                    <form id="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" value="<?php echo $ban["uuid"] ?>" id="uuid" name="uuid" placeholder="UUID" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <input type="text" value="<?php echo $ban["reason"] ?>" id="reason" name="reason" placeholder="Reason" class="form-control"/>
                            </div>

                            <input type="hidden" value="<?php echo $_GET["id"] ?>" id="id" name="id">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#form").submit(function(e) {
                    e.preventDefault();

                    var id = $("#id").val();
                    var uuid = $("#uuid").val();
                    var reason = $("#reason").val();

                    $.post("api/add.php", { id: id, uuid: uuid, reason: reason }, function(data) {
                        location.href = "ban.php?id=" + data;
                    });
                });
            });
        </script>
    </body>
</html>