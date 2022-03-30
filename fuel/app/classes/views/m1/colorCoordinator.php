<?php
echo Form::open(array(
  "action" => 'index/' . Input::uri(),
  "method" => "get",
  "id" => "color_form"
));
echo '<div>';
echo Form::label('Number of Rows/Columns (1-26): &nbsp', 'table');
echo Form::input('table', '');
echo '</div>';
echo '<br><br>';
echo Form::label('Number of Colors (1-10): &nbsp &nbsp &nbsp &nbsp', 'colors');
echo Form::input('colors', '');
echo '<br><br>';
echo Form::submit('submitBtn', 'submit');
  
echo Form::close();
?>
