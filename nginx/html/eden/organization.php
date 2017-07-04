<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>--- TODO ---</title>

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
                $fields = array("Customer ID", "Mobile Number", "Telephone Number", "FAX Number", "Email:", "Social Media Profile", "SMP_Twitter", "SMP_Facebook", "SMP_Others", "Title", "Business Name", "Business Address", "BA_Postal Code", "BA_Thana Name", "BA_Address", "Factory Address", "FA_Postal Code", "FA_Thana Name", "FA_Address", "Customer Type", "Organization Category", "Organization Nature", "Organization Type", "Established Date", "TIN No", "VAT Registration Number", "Certificate of Registration Number", "Certificate of Registration Date", "Certificate of Registration Authority", "Registration Last Renewal Date", "Trade License No", "Trade License Issue Date", "Trade License Issue Authority", "Trade License Expiry Date", "Import Registration No", "Import Registration Authority", "Import Registration Issue Date", "Import Registration Last Renewal", "Import Registration Expiry Date", "Export Registration No", "Export Registration Authority", "Export Registration Issue Date", "Export Registration Last Renewal", "Export Registration Expiry Date", "Bank Name 1", "Branch Name 1", "Account Type 1", "Bank Name 2", "Branch Name 2", "Account Type 2", "Deposit Amount", "Loan Amount", "Affiliation Type");
                //var_dump($fields);
                foreach ($fields as $field) {
                    ?>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="<?php echo  mb_strtolower(str_replace(" ", "_", $field)) ?>"><?php echo $field ?></label>
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