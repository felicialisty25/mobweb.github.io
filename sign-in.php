<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

	<!-- Include jQuery Mobile stylesheets -->
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

	<!-- Include the jQuery library -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Include the jQuery Mobile library -->
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link href="css/app.css" rel="stylesheet" />
	<title>Food Blog</title>
</head>
<body>
     <div data-role="page">
        <div data-role="header" data-theme="b" style="text-align: center;">
             <a href="login.html" data-rel="back" class="ui-btn-left ui-btn  ui-btn-icon-notext ui-corner-all ui-icon-back">Back</a>
        
            <h1><img src="images/32.png">
            Food Blog</h1>
        
        </div><!-- /header -->
        <div role="main" class="ui-content">
            <h3>Masuk</h3>
        <form method="post" action="insert2.php">
            <label for="txt-email">Username</label>
            <input type="text" name="uname" id="uname" value="">
            <label for="txt-password">Password</label>
            <input type="password" name="pass" id="pass" value="">
            <button id="submit" class="ui-btn ui-btn-b ui-corner-all mc-top-margin-1-5">OK</button>
        </form>
        </div><!-- /content -->
    </div><!-- /page -->

<script type="text/javascript">
    $("form").submit(function(e){
        e.preventDefault();

        $.post(
            'insert2.php',
            {
                uname :$("#uname").val(),
                pass : $("#pass").val()
            },
            function(result){
                if(result == 'A')
                    window.location.href= "/~m26416122/mobweb/home.html";
                else
                    alert('Password atau Username salah');
            }
        );
    });
</script>
</body>
</html>