<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Owner Information</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- Leave those next 4 lines if you care about users using IE8 -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>



        <!-- TODO: Here goes your content! -->
        <div class="container">
            <form class="form-horizontal">
                <?php
                $fields = array("Member ID","Member Name","Owner Share","Present Property Value","Nature of Ownership","Description");
                //var_dump($fields);
                foreach ($fields as $field) {
                    ?>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="<?php echo mb_strtolower(str_replace(" ", "_", $field)) ?>"><?php echo $field ?></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" id="<?php echo mb_strtolower(str_replace(" ", "_", $field)) ?>">
                        </div>
                    </div>
                <?php }
                ?>
            </form>
        </div>

        <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
