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
        <h3>Daftar</h3>
        <form method="post" action="insert.php">
            <label for="txt-first-name">Nama Depan</label>
            <input type="text" name="fname" id="fname" value="">
            <label for="txt-last-name">Nama Belakang</label>
            <input type="text" name="lname" id="lname" value="">
            <label for="txt-email">Username</label>
            <input type="text" name="uname" id="uname" value="">
            <label for="txt-password">Password</label>
            <input type="password" name="pass" id="pass" value="">
            <label for="txt-password-confirm">Confirm Password</label>
            <input type="password" name="cpass" id="cpass" value="">
            <button class="ui-btn ui-btn-b ui-corner-all mc-top-margin-1-5" id="submit" data-role="none">Submit</button>
        </form>
    </div><!-- /content -->
</div><!-- /page -->

<script>
    /*$( document ).ready(function(){
        $("#submit").click(function(){
            var mfname=$("#fname").val();
            var mlname = $("#lname").val();
            var muname=$("#uname").val();
            var mpass=$("#pass").val();
            var mcpass=$("#cpass").val();

            $.ajax({
                url : "insert.php",
                type: "POST",
                data:{
                    fname : fname,
                    lname : lname,
                    uname : uname,
                    pass : pass,
                    cpass :cpass
                },
                success:function(res){
                    alert("Berhasil");
                }
            });

        });
    });*/
    $("form").submit(function(e){
        e.preventDefault();

        $.post(
            'insert.php',
            {
                fname : $("#fname").val(),
                lname : $("#lname").val(),
                uname :$("#uname").val(),
                pass : $("#pass").val(),
                cpass :$("#cpass").val()
            },
            function(result){
                window.location.href= "/~m26416122/mobweb/sign-in.php";
            }
        );
    });
</script>
</body>
</html>