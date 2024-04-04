<!DOCTYPE html>
<html>
<head>
    <title>Hei</title>
</head>
<body>
    <h1>Hei</h1>
    <?php
        try {
            //Opprette kobling
            $kobling = new mysqli('localhost', 'nora', 'password123', 'vetikke');

            //sjekk om kobling virker
            if ($kobling->connect_error) {
                throw new Exception("Noe gikk galt: " . $kobling->connect_error);
            }

            //angi utf-8 som tegnsett
            $kobling->set_charset("utf8");

            echo "hello";
        } catch (Exception $e) {
            echo "Feilmelding: " . $e->getMessage();
        }
    ?>
</body>
</html>
