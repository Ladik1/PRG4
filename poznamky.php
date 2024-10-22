<?php
//Poznámky

//Proměnná
$vek = 20;
$jmeno = "Adam";
$pole = [1, 4, 5];
$pravda = true;
$pravda = false;

//Operace:
//Čísla:
$vys = (5 + 4 - $vek) / 2 * 8;
$vys = 13 % 5;

//String - TEXT
$pozdrav = "ahoj jak se máš, ";
$jmeno = "Adéla";
$pozdrav_a_jmeno = $pozdrav . $jmeno; //spojení stringů


//Větvení
if ($vek == 21) {
} else if ($vek < 18) {
} else if ($vek >= 18) {
} else {
};

// HTML není validní PHP kód
echo  "<h1>Hello world<h1>";

// Shift + Ctrl + P = OP vyhledávač

// "String" / 'String'

// For
for ($poctiadlo=0; $pocitadlo < 100; $pocitadlo++);

//Místo vestavěné funkce použijeme cyklus   
$cislo=2;
for ($poc=0; $poc < 30; $poc++) {
  //  $i = pow($c,$mocnina);
    $vys = 1;
for ($i=0; $i <$mocnina; $i++) 
$vys = ($vys * $cislo);

$znaky = 4;
$repeat = 2;
for ($o = 1; $o <= $repeat; $o++){
for ($i=1; $i <= $znaky ; $i++) { 
        echo "#";
        
 }echo ("<br>");
}

//Intval převádí číslo na int
$cislo = "12";
$parsed = intval($cislo);
//Převádíme něco na desetinné číslo
$parsedF = $floatval("12,48");

//Vypisuje datový typ
var_dump($prom);

//Přidávání na novou pozici pole
$pole1 = [1, 4, 5];
$pole1[] = 6;
//Vypíše konkrétní prvek
echo [3];
//Spočíta prvky v poli 
$prvky = count($prvky);


//
$prom = ["Petr","Bobo","Karel"];
for ($i=0; $i < count($prom); $i++) { 
     //   echo($prom[$i]);
        echo ("Žák ". ($prom[$i]). " je na pozici ".$i + 1 ."<br>");
        
}

//Základní funkce
//Název 
$jmeno = "Martin";
function pozdrav($jmeno): void {echo "Ahoj, " . $jmeno ;
}
//Volám funkci
pozdrav($jmeno);

                          //Nemusí 
function FunctionName() : Returntype {
  //Co se deje uvnitř
  //...
  //Vracíme nějakou hodnotu 
  return ; //Co jde OUT

  //Konstanta
  define("PIN", "123");
}
w
// AND - && (Musí platit obojí)
// OR - || (Musí platit jeden)
if ($vek > 0 && $vek <3) {
  return "Batole";
}
if ($vek > 0 || $vek <3) {
  return "Nesmí řídit";
}

//FOR EACH 
$zaci = ["Pep", "POn"];

foreach ($zaci as $zacihodne) {
  echo($zacihodne);
}

//
function findSmal($arr)
{
        $nejmensi = $arr[0];
            for ($i = 0; $i < count($arr); $i++) {
                $aktualniPrvek = $arr[$i];
                if ($aktualniPrvek < $nejmensi) {
                        $nejmensi = $aktualniPrvek;
                }
        }

        return $nejmensi;
} 
$arr = [5, 8, 2, 9, 4, 7];
echo findSmal($arr);
//

























}




