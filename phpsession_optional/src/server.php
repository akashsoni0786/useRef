
<?php
session_start();

if((isset($_COOKIE['email'])))
{?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SERVER</title>
        <style>
            table,
            th,
            td { border: 1px solid; }
        </style>
    </head>

    <body>
        <?php if (isset($_COOKIE['email'])){ ?>
        <h3>Current User Mail Id : <?php echo $_COOKIE['email']; ?></h3>
        <?php } ?>

        
        <h3>Employees Table</h3>
        <table>
            <tr>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php foreach ($_SESSION['employee'] as $i) { ?>
                <tr>
                    <td><?php echo $i['mail'] ?></td>
                    <td><?php echo $i['pass'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <br><br>
    </body>
    </html>
<?php
}

else if((isset($_SESSION['mail'])))
{?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SERVER</title>
        <style>
            table,
            th,
            td { border: 1px solid; }
        </style>
    </head>

    <body>
        <?php if (isset($_COOKIE['email'])){ ?>
        <h3>Current User Mail Id : <?php echo $_COOKIE['email']; ?></h3>
        <?php } 
        else{ ?>
            <h3>Current User Mail Id : <?php echo $_SESSION['mail']; ?></h3>
        <?php } ?>
        
        <h3>Employees Table</h3>
        <table>
            <tr>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php foreach ($_SESSION['employee'] as $i) { ?>
                <tr>
                    <td><?php echo $i['mail'] ?></td>
                    <td><?php echo $i['pass'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <br><br>
        <a href="logout.php"><button>LOGOUT</button></a>
    </body>
    </html>
<?php
}
?>
