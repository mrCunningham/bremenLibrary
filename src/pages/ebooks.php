<!DOCTYPE html>
<html>

<head>
    <title>Bremen Public Library</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include "../includes/css.php" ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php include "../includes/partials/navbar.php" ?>
        </div>
        <div class="row no-gutters">
            <div class="col-md-12 content pl-3 pt-3 pr-3 pb-3">
                <h3>eBooks and Digital Materials</h3>
                <a href="https://meet.libbyapp.com/">
                   <img id="contentImage" src="../assets/images/meetlibby.jpg" title="OverDrive digital downloads" alt="OverDrive digital downloads" />
                </a>
                <br />
                <a href="https://www.hoopladigital.com/home"><img id="contentImage" src="../assets/images/hooplahd.jpg" alt="Hoopla" /></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php include "../includes/partials/footer.php" ?>
            </div>
        </div>
    </div>
    <?php include "../includes/scripts.php" ?>
</body>

</html>