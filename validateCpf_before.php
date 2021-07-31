<?php

function tudoIgual($str) {
    $igual = true;
    for($i = 0; $i <= strlen($str); $i++){
        $igual = $igual && (substr($str, $i, 1) == substr($str, 0, 1));
    }
    return $igual;
}

function validate($str) {

if ($str !== null && $str !== '') {
    if (strlen($str) >= 11 || strlen($str) <= 14){
        $str = str_replace('.','',$str) ;
        $str = str_replace('-','',$str) ;
        $str = str_replace(' ','',$str) ; 
        if (!tudoIgual($str)) {
            try{  
                $d1 = null;, d2;  
                let     dg1, dg2, rest;  
                let     digito;  
                    let     nDigResult;  
                d1 = d2 = 0;  
                dg1 = dg2 = rest = 0;  
                    
                for (let nCount = 1; nCount < $str.length -1; nCount++) {  
                    // if (isNaN(parseInt($str.sub$string(nCount -1, nCount)))) {
                    // 	return false;
                    // } else {

                        digito = parseInt($str.substring(nCount -1, nCount));  							
                        d1 = d1 + ( 11 - nCount ) * digito;  
                        d2 = d2 + ( 12 - nCount ) * digito;  
                    // }
                };  
                    
                rest = (d1 % 11);  
                dg1 = (rest < 2) ? dg1 = 0 : 11 - rest;  
                d2 += 2 * dg1;  
                rest = (d2 % 11);  
                if (rest < 2)  
                    dg2 = 0;  
                else  
                    dg2 = 11 - rest;  
                let nDigVerific = $str.substring($str.length-2, $str.length);  
                nDigResult = "" + dg1 + "" + dg2;  
                return nDigVerific == nDigResult;
            }catch (e){  
                console.error("Erro !"+e);  
                return false;  
            }  
        } else return false
    }else return false;
} else return false;
}
