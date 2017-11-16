<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
$name = trim(strtolower($_POST['person']));
if ($name === 'lyn' || $name === 'lynne') {
    print_r("<h1>Hey ".$_POST["person"]."! Too desperate to be beautiful? Naw.. you're pretty, just burn some fats!!  :D</h1>");
} else {
    print_r("<h1>Hey ".$_POST["person"]."! Too desperate to be beautiful? Naw.. you're pretty, just kinda silly! :D</h1>");
}
?>

<form action="index.html">
<input type="submit" name="submit" value="Back" onclick="self.location='index.html'">
</form>

</body>
</html>
