<?php
    if (isset($_POST['userinput'])) {
        if ($_POST['userinput'] != "") {
            
            $userinput = strtolower($_POST['userinput']);
            
        }
        else {
            echo "Notting entered.";
        }
    }
    else {
        echo "
            <FORM method = \"POST\">
                Enter a string: <INPUT type = \"text\" name = \"userinput\">
                <INPUT type = \"submit\">
            </FORM>";
    }

?>
