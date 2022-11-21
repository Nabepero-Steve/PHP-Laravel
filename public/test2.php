public function Q3 (){



// Set
$set =array_rand(range(1,20));
// Inputs
$sentence = "this is the picture that i took in the trip.";
// Arrays
$items = array();
$enciphItems = array();


// Decipher 


 for ($i=0; $i<=strlen($sentence);$i++){
   
     if(!empty($sentence[$i]))
     {  
         if(ord($sentence[$i])==32){
             $items[] = chr(ord($sentence[$i]));
         }
         else if(ord($sentence[$i])==46){
             $items[] = chr(ord($sentence[$i]));
         }
         else {
             $items[] = chr(ord($sentence[$i])+$set);
         }
     }
}

// Encipher
$result = implode(',',$items);
$deciphered = str_replace(',','',$result);

for ($j=0; $j<=strlen($deciphered);$j++){
   
    if(!empty($deciphered[$j]))
    {  
       
        if(ord($deciphered[$j])==32){
             $enciphItems[] = chr(ord($deciphered[$j]));
        }
        else if(ord($sentence[$j])==46){
              $enciphItems[] = chr(ord($deciphered[$j]));
        }
        else {
            $enciphItems[] = chr(ord($deciphered[$j])-$set);
        }
    }
}

$result = implode(',',$enciphItems);
$Encipher = str_replace(',','',$result);
echo " <b> Dechiper Message</b>: $deciphered <br> <b> Enchiper Message</b>: $Encipher";
 


 
}