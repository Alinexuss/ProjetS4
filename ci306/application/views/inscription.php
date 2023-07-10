<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodsport</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/inscriptionStyle.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form action="inscription/add" method="POST" class="appointment-form" id="appointment-form">
                <h2>Sport & Alimentation</h2>
                <div class="form-group-1">
                    <input type="text" name="title" id="title" placeholder="Title" required />
                    <input type="text" name="name" id="name" placeholder="Your Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="password" name="password" id="password" placeholder="Your password" required />
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Sign up" />
                </div>
            </form>
        </div>

    </div>

    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>