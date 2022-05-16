<?php
    
    try
    {   
        // WAMP programini kullanmak daha iyi oluyor
        $request=new SoapClient('https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WDSL');
        $result=$request->TCKimlikNoDogrula(
            array(
                'TCKimlikNo' => 3131,
                'Ad' => '',
                'Soyad' => '',
                'DogumYili' => 3131
            )
        );

        if($result -> TCKimlikNoDogrulaResult) {
            echo "Credentials are correct.";
        } else {
            echo "Credentials are not correct.";
        }
    } 
    catch(Exception $e){
        echo $e->getMessage();
    }
?>
