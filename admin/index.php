<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NIet Placement</title>
        <link href="" rel="icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/space.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&family=Raleway:wght@300&family=Sofia+Sans+Semi+Condensed&display=swap" rel="stylesheet">
        
    </head>

    <?php include'db/config.php'?>
    <body style="background-color: #CC0000;">

        <div class="container-fluid"></div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-11 mx-auto login_form_section">
                    
                    <h6 class="pt-40">Admin Login Here</h6>
                    <div class="row  pr-10 pl-10 pt-10">
                        <div class="col-md-12 border_withdrwal_section_2"></div>
                    </div>
                    <div class="row pr-10 pl-10">
                        <div class="col-md-12">
                            <form action="db/login.php" method="POST">
                                <label class="form-label bank_card_label pt-20">Username*</label>
                                <input type="text" name="uname" class="form-control bank_card_block" required>
        
                                <label class="form-label bank_card_label pt-20">Password*</label>
                                <input type="password" name="password" class="form-control bank_card_block" required>
        
                                <button class="form-control recharge_selection_button mt-30" name="submit" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="row  pr-10 pl-10 pt-30">
                        <div class="col-md-12 border_withdrwal_section_2"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>