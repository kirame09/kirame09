<?php

$name = trim(strtolower($_POST['person']));
if ($name === 'lyn' || $name === 'lynne') {
    print_r("<h1>Hey ".$_POST["person"]."! Too desperate to be beautiful? Naw.. you're pretty, just burn some fats!!  :D</h1>");
} else {
    print_r("<h1>Hey ".$_POST["person"]."! Too desperate to be beautiful? Naw.. you're pretty, just kinda silly! :D</h1>");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: #ffe4c4;
            font-family: sans-serif;
        }
        h1 {
            text-align: center;
            color: #ff7f50;
            font-size: 50px;
        }
        #ok {
            position:relative;
            top: 150px;
            left: 600px;
            }
        #pass {
            position: relative;
            top: 150px;
            left: 650px;
        }

    </style>
</head>
<body>
<h1>Do You Think You're Beautiful?</h1>

<form method="post" id="form" action="/" onsubmit="return false;">
<div style="width: auto; margin: 0 auto; text-align: center;">
    <input type="text" id="person" name="person" placeholder="Your name here">
</div>
<button class="btn btn-success" id="ok">YES</button>
<button class="btn btn-success" id="pass">NO</button>
</form>

<script>

var form = document.getElementById("form");

document.getElementById('pass').onclick = function(e) {
    e.preventDefault();
    if (document.getElementById('person').value === '') {
        alert('Please enter your name!')
        return false;
    }
    form.submit()
}
</script>
<script type="text/javascript" src="script_testing.js"></script>
</body>
</html>
