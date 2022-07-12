<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Caching</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>
    <?php
      session_start();

      function since_time($datetime, $full = false)
	  {
			$now = new DateTime;
			$ago = new DateTime($datetime);
			$difference = $now->diff($ago);
		
			$difference->week = floor($difference->d / 7);

			$time = array
			(
				'd' => 'day',
				'h' => 'hour',
				'i' => 'minute',
				's' => 'second',
			);
			
			foreach ($time as $i => &$j)
			{
				if ($difference->$i)
				{
					$j = $difference->$i . ' ' . $j . ($difference->$i > 1 ? 's' : '');
				}
				else
				{
					unset($time[$i]);
				}
			}
		  
			echo 'You first used this site ';
			echo implode(', ' , $time). ' ago';
	  }

        echo "<br>";
        if (!isset($_SESSION['time']))
		{
			$_SESSION['time'] = date("h:i:sa");
        }

        echo since_time($_SESSION['time']);

    ?>

</body>
=======
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Caching</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>
    <?php
      session_start();

      function since_time($datetime, $full = false)
	  {
			$now = new DateTime;
			$ago = new DateTime($datetime);
			$difference = $now->diff($ago);
		
			$difference->week = floor($difference->d / 7);

			$time = array
			(
				'd' => 'day',
				'h' => 'hour',
				'i' => 'minute',
				's' => 'second',
			);
			
			foreach ($time as $i => &$j)
			{
				if ($difference->$i)
				{
					$j = $difference->$i . ' ' . $j . ($difference->$i > 1 ? 's' : '');
				}
				else
				{
					unset($time[$i]);
				}
			}
		  
			echo 'You first used this site ';
			echo implode(', ' , $time). ' ago';
	  }

        echo "<br>";
        if (!isset($_SESSION['time']))
		{
			$_SESSION['time'] = date("h:i:sa");
        }

        echo since_time($_SESSION['time']);

    ?>

</body>
>>>>>>> 79f6c1d315dbc03540999efd779572f6f26ca731
</html>