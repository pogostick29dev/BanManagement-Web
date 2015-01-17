<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <title>BanManagement - Home</title>
    </head>

    <body>
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

                <tr>
                    <td><a href="ban.php?id=1">1</a></td>
                    <td>----</td>
                    <td>01/17/15 2:38 PM</td>
                    <td>Griefing.</td>
                </tr>

                <tr>
                    <td><a href="ban.php?id=2">2</a></td>
                    <td>----</td>
                    <td>01/16/15 9:22 AM</td>
                    <td>Advertising.</td>
                </tr>
            </table>
        </div>
    </body>
</html>