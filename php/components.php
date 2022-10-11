<?php

function inputElement ($placeholder,$name){
    $ele = "
        <div class=\"mui-textfield\">
            <input type=\"text\" placeholder='$placeholder' name='$name'>
         </div>
    ";
    echo $ele;
}
