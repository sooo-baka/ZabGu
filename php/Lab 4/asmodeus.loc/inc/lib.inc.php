<?php
	
	function drawMenu($menu){
		echo "<ul>";
		foreach ($menu as $item) 
		{					
			echo "<li>";
			echo "<a href='{$item['href']}'> {$item['link']} </a>"; 
			echo "</li>";					
		}
		echo "</ul>";
	}
	
	function drawTable($cols, $rows, $color){
		for ($tr = 1; $tr <= $rows; $tr++)
		{
			echo '<tr>';

			for($td = 1; $td <= $cols; $td++)
			{
				$background = $color;
				if($tr == 1 || $td == 1)
					$background = 'gray;font-weight:bold';
					echo '<td style="background-color:', $background, '">', $tr * $td, '</td>';
			}
			echo "</tr>";
		}			
	}
?>