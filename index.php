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
            <input type="button" value="+" onclick="location.href = 'addban.php'" class="btn btn-primary pull-right"/>
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
    </body>
</html>