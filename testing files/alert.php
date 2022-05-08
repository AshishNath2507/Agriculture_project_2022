<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <button>Show Alert</button>
        <div class="alert hide">
            <span class="fas fa-exclamation-circle"></span>
            <span class="msg">Warning: This is a warning alert!</span>
            <div class="close-btn">
                <span class="fas fa-times"></span>
            </div>
        </div>
    </div>

    
    <script>
        $('button').click(function() {
            $('.alert').addClass("show");
            $('.alert').removeClass("hide");
            $('.alert').addClass("showAlert");
            setTimeout(function() {
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
            }, 5000);
        });
        $('.close-btn').click(function() {
            $('.alert').removeClass("show");
            $('.alert').addClass("hide");
        });
    </script>
</body>

</html>