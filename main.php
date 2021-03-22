class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $temp=[];
        foreach ($nums as $v){
            if(isset($temp[$v])){
                $temp[$v]++;
            }else{
                $temp[$v]=1;
            }
        }var_dump($temp);
        arsort($temp);
        var_dump($temp);
        $c=0;
        foreach($temp as $ke=>$v){
            if($c<$k)
            $r[]=$ke;
            $c++;
        }
        return $r;
    }
}
