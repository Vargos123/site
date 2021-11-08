<?php

 $counter = 'counter.txt';
 $download = '../download/NotesApp.zip';
 $number = file_get_contents($counter);    
 $number++;                                
 $fh = fopen($counter, 'w');   // открываем файл            
 fwrite($fh, $number);         // добавляем еденицу             
 fclose($fh);                   // закрываем файл    
 header("Location: $download");

?>