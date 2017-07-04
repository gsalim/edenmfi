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
                $fields = array("Member ID","KYC","Occupation-Nature of Business of the Individual-Organization","Occu_Category","Occu_Risk Level","Occu_Score","Net worth of the Customer","NW_Amount","NW_Risk Level","NW_Risk Rating","Procurement of Accounts","PA_Procurements","PA_Risk Level","PA_Risk Rating","Estimated Monthly Transaction","EMT_Transaction in Current Account","EMT_Transaction in Savings Account","EMT_Risk Level","EMT_Risk Rating","Estimated Number of Monthly Transaction","ENMT_Number of Transactions in Current Account","ENMT_Number of Transactions in Savings  Account","ENMT_Risk Level","ENMT_Risk Rating","Estimated Monthly Cash Transaction","EMCT_Transaction in Current Account","EMCT_Transaction in Savings Account","EMCT_Risk Level","EMCT_Risk Rating","Estimated Number of Monthly Cash Transaction","ENMCT_Number of Transactions in Current Account","ENMCT_Number of Transactions in Savings Account","ENMCT_Risk Level","ENMCT_Risk Rating","Overall Risk Grading","ORG_Total Risk Rating","ORG_Total Assessment");
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

