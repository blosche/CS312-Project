<?php
echo Form::open(array(
  "action" => 'index/' . Input::uri(),
  "method" => "get",
  "id" => "color_form"
));
echo '<div id="textFail">';
echo '<h3>Please make sure the rows and columns is a numeric value between 1 and 26. and the number of colors is between 1 and 10.</h3>';
echo '</div>';
echo '<div>';
echo Form::label('Number of Rows and Columns (1-26): &nbsp', 'table');
echo Form::input('table', '');
echo '</div>';
echo '<br><br>';
echo Form::label('Number of Colors (1-10): &nbsp', 'colors');
echo Form::input('colors', '');
echo '<br><br>';
echo Form::submit('submitBtn', 'submit');
  
echo Form::close();
?>
