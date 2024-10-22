<pre><?php
         $arr = [5, 8, 2, 9, 4, 7];
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

        echo findSmal($arr);
        function mujSort($puvodni)
        {
                $ordered = [];

                while (count($ordered) < count($puvodni)) {
                        $nejmensi = findSmal($puvodni);
                        $ordered[] = $nejmensi;
                                               
                }
                
                return $ordered;
                
        }
        print_r(mujSort($arr));
//array_splice($arr, 2, 1);