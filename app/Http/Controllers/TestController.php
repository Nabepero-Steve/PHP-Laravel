<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
