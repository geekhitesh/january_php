<?php

include('header.php');

?>

<html>


<form method="POST" action="register.php">

Name:<input type="text" name="name" value="" /><br/>
Age:<input type="text" name="age" value="" /><br/>
City:<input type="text" name="city" value="" /><br/>
Password:<input type="password" name="password" value="" /><br/>
<input type="submit" value="register" />
</form>

</html>

<?php

include('footer.php');

?>