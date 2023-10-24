<?php
    echo "<script src='https://code.jquery.com/jquery-1.8.2.min.js'></script>";
    echo "<script src='https://code.jquery.com/ui/1.9.2/jquery-ui.js'></script>";

    echo 
        "<script type='text/javascript'>
            $(document).ready(function(){
                $(\"#button\").live(\"click\", function(){
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                    );

                    
                });

            });
        </script>";
?>

<input type="button" id="button" value="Click Me" />