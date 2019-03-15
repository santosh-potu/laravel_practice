<html>
    <body>
<?php
echo Form::open(array('url'=>'/foo/bar'));

echo Form::text('username','Username');
echo "<br/>";

echo Form::text('email','example@email.com');
echo "<br/>";

echo Form::password('password');
echo "<br/>";

echo Form::checkbox('name','value');
echo "<br/>";

echo Form::radio('name','value', true);
echo "<br/>";

echo Form::file('image');
echo "<br/>";

echo Form::select('size',array('L' => 'Large','S' => 'Small'),'S');
echo "<br/>";

echo Form::submit('Click me!');
echo "<br/>";

echo Form::close();
?>

    </body>
</html>
