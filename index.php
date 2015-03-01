<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <title>BanManagement - Home</title>
    </head>

    <body>
        <?php
            require("api/api.php");
        ?>

        <div class="jumbotron">
            <div class="container">
                <h1>BanManagement</h1>
                <p>Online ban management for Minecraft servers.</p>
            </div>
        </div>

        <div class="container">
            <input type="button" value="+" data-toggle="modal" data-target="#modal" class="btn btn-primary pull-right"/>
            <br/><br/>
        </div>

        <div class="container">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>UUID</th>
                    <th>Date</th>
                    <th>Reason</th>
                </tr>

                <?php
                    $bans = get_bans();

                    while ($ban = $bans->fetch_assoc()) {
                ?>
                        <tr>
                            <td><a href="ban.php?id=<?php echo $ban["id"] ?>"><?php echo $ban["id"] ?></a></td>
                            <td><?php echo $ban["uuid"] ?></td>
                            <td><?php echo $ban["date"] ?></td>
                            <td><?php echo $ban["reason"] ?></td>
                        </tr>
                <?php
                    }
                ?>
            </table>
        </div>

        <div class="modal fade" id="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add Ban</h4>
                    </div>
                    <form id="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" id="uuid" name="uuid" placeholder="UUID" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <input type="text" id="reason" name="reason" placeholder="Reason" class="form-control"/>
                            </div>
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

                    var uuid = $("#uuid").val();
                    var reason = $("#reason").val();

                    $.post("api/add.php", { uuid: uuid, reason: reason }, function(data) {
                        location.href = "ban.php?id=" + data;
                    });
                });
            });
        </script>
    </body>
</html>