<?php 	

$cetak_gambar=5; 
for($i=0; $i<$cetak_gambar; $i++)
    {
        for($j=0; $j<$cetak_gambar; $j++)
        {
            if($j==0 || $j==$cetak_gambar-1)
            {
                echo "* ";
            }
            elseif($i==2){
                echo " * ";
            }
            else
            {
                echo "= ";
                // if(($cetak_gambar%2)==1)
                // {
                //     echo "= ";
                // }
                // elseif(($cetak_gambar%2)==1)
                // {
                //     echo "+";
                // }
            }
        }
        echo "<br>";;
    }
 ?>