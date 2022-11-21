
public function Q6(){
 
// Value of Juice
$juice = 501;
$weights = array();

do{ 
$weight = $this->weightCase($juice);
 
$weights[]= $weight;

$juice = ($juice - $weight);

}
while($juice!=0);

sort($weights);
$result = implode(',',$weights);
echo str_replace(',',' ',$result );

}


public function weightCase($value){

if($value>=512)
    {
    
    return  $value = 512; 
    }

elseif($value>=256)
    {
    return  $value = 256; 
    }

else if($value>=128)
    {
    return  $value = 128; 
    }

else if($value>=64)
    {
    
        return  $value = 64; 
    }
else if($value>=32)
    {
    
        return  $value = 32; 
    }

else if($value>=16)
    {
    
        return  $value = 16; 
    }
else if($value>=8)
    {
    
        return  $value = 8; 
    }

else if($value>=4)
    {
    
        return  $value = 4; 
    }
else if($value>=2)
    {
    
    return  $value = 2; 
    }
else if($value>=1)
    {
    
    return  $value = 1; 
    }

else{
    return null;
}

 
}