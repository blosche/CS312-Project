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

echo '<br><br>';

?>
<style type="text/css">
.tg  {border-collapse:collapse;border-color:#ccc;border-spacing:0;}
.tg td{background-color:#fff;border-bottom-width:1px;border-color:#ccc;border-style:solid;border-top-width:1px;
  border-width:3px;color:#333;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;
  word-break:normal;}
.tg th{background-color:#f0f0f0;border-bottom-width:1px;border-color:#ccc;border-style:solid;border-top-width:1px;
  border-width:3px;color:#333;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;
  padding:10px 5px;word-break:normal;}
.tg .tg-x1hj{border-color:inherit;font-size:22px;text-align:left;vertical-align:top}
.tg .tg-buh4{background-color:#f9f9f9;text-align:left;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 100%">
<colgroup>
<col style="width: 20%">
<col style="width: 80%">
</colgroup>
<tbody>
<?php
  for ($colors; $colors > 0; $colors--){
    $colorOptions = array(
      'red',
      'orange',
      'yellow',
      'green',
      'blue',
       'purple',
      'grey',
      'brown',
      'black',
      'teal'
    );
    $dropdown = Form::select('colorChoice', 10 - $colors, $colorOptions);

    echo '<tr><td class="tg-0pky">';
    echo $dropdown;
    echo '</td><td class="tg-0pky"></td></tr>';
  }
  ?>
</tbody>
</table>