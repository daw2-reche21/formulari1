<?php
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db( $db,'moviesite') or die(mysqli_error($db));

    $user=$_POST['name'];
    $comentario=$_POST['coment'];
    $idpeli=$_POST['idpelicula'];
    $fechaComment=$_POST['fecha'];
    $rateUser=$_POST['rate'];

    $query =<<<ENDSQL

        INSERT INTO reviews
            (review_movie_id, review_date, reviewer_name, review_comment,
                review_rating)
        VALUES 
            ($idpeli, "$fechaComment", "$user", "$comentario", $rateUser);

        
ENDSQL;
        mysqli_query( $db,$query) or die(mysqli_error($db));
        echo 'Your comment has been added correctly.';

?>