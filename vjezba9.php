<?php

function provjeraOtvorenosti() {
    $danDan = new DateTime();
    $dan = $danDan->format('l'); 

    
    $holidays = [
        '01-01', 
        '25-12', 
        '01-05'  
        
    ];

    $currentDate = $danDan->format('m-d'); 


    if (in_array($currentDate, $holidays)) {
        return "Dućan je zatvoren zbog praznika.";
    }

   
    if ($dan == 'Saturday') {
        $sat = $danDan->format('H'); 
        if ($sat >= 9 && $sat <= 14) {
            return "Dućan je otvoren. Radno vrijeme: 9 - 14.";
        } else {
            return "Dućan je zatvoren. Radno vrijeme je 9 - 14.";
        }
    }


    if ($dan == 'Sunday') {
        return "Dućan je zatvoren. Nedjeljom ne radi.";
    }


    $sat = $danDan->format('H');
    if ($sat >= 8 && $sat < 20) {
        return "Dućan je otvoren. Radno vrijeme: 8 - 20.";
    } else {
        return "Dućan je zatvoren. Radno vrijeme je 8 - 20.";
    }
}


echo provjeraOtvorenosti();
?>
