<?php
function e($text, $type = "alert-info")
{
echo "<div class=\"container\">";
    echo "<div class=\"alert  margin $type\">";
    echo "<strong>$text</strong>";
    echo "</div>";
echo "</div>";
}

?>
