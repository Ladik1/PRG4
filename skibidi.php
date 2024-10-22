<?php
function findSmal($arr)
{
    // Najdeme nejmenší prvek v poli
    $nejmensi = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $aktualniPrvek = $arr[$i];
        if ($aktualniPrvek < $nejmensi) {
            $nejmensi = $aktualniPrvek;
        }
    }

    // Odstraníme první výskyt nejmenšího prvku z pole
    $index = array_search($nejmensi, $arr);
    array_splice($arr, $index, 1);

    return $nejmensi;
}

function mujSort($puvodni)
{
    $ordered = [];

    while (count($puvodni) > 0) {
        // Najdeme a odstraníme nejmenší prvek a přidáme ho do nového pole
        $ordered[] = findSmal($puvodni);
    }

    return $ordered;
}

$arr = [5, 8, 2, 9, 4, 7];
echo "Seřazené pole: ";
print_r(mujSort($arr));
