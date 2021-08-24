<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class VigenereController extends Controller
{

    public function index(){
        return view('index');
    }

    function cifrar(Request $request)
    {
        $key = $request->key;
        $cadena = $request->cadena;
        $key = strtolower($key);
        

        $code = "";
        $indiceLlave = 0;
        $longitudLlave = strlen($key);
        $longitudCadena = strlen($cadena);
        

        for ($i = 0; $i < $longitudCadena; $i++)
        {

            if (ctype_alpha($cadena[$i]))
            {
                
                if (ctype_upper($cadena[$i]))
                {
                    $cadena[$i] = chr(((ord($key[$indiceLlave]) - ord("a") + ord($cadena[$i]) - ord("A")) % 26) + ord("A"));
                }
                
                
                else
                {
                    $cadena[$i] = chr(((ord($key[$indiceLlave]) - ord("a") + ord($cadena[$i]) - ord("a")) % 26) + ord("a"));
                }
                
                
                $indiceLlave++;
                if ($indiceLlave >= $longitudLlave)
                {
                    $indiceLlave = 0;
                }
            }
        }
        
        
        dd("La clave cifrada es: ", $cadena);
    }


    function descifrar(Request $request)
    {
        $key = $request->key;
        $cadena = $request->cadena;
        $key = strtolower($key);
        
        
        $code = "";
        $indiceLlave = 0;
        $longitudLlave = strlen($key);
        $longitudCadena = strlen($cadena);
        
        
        for ($i = 0; $i < $longitudCadena; $i++)
        {
            
            if (ctype_alpha($cadena[$i]))
            {
                
                if (ctype_upper($cadena[$i]))
                {
                    $x = (ord($cadena[$i]) - ord("A")) - (ord($key[$indiceLlave]) - ord("a"));
                    
                    if ($x < 0)
                    {
                        $x += 26;
                    }
                    
                    $x = $x + ord("A");
                    
                    $cadena[$i] = chr($x);
                }
                
                
                else
                {
                    $x = (ord($cadena[$i]) - ord("a")) - (ord($key[$indiceLlave]) - ord("a"));
                    
                    if ($x < 0)
                    {
                        $x += 26;
                    }
                    
                    $x = $x + ord("a");
                    
                    $cadena[$i] = chr($x);
                }
                
                
                $indiceLlave++;
                if ($indiceLlave >= $longitudLlave)
                {
                    $indiceLlave = 0;
                }
            }
        }
        
        
        dd("La clave descifrada es: ", $cadena);

    } 
}