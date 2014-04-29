<?
/*
 * @description The following is a PHP example of the famous "merge sort" algorithm.
 * @author Billy McDonald <billyjmcdonald@gmail.com>
 */
$numbers = [6,3,1,6,8,3,2,7,4];

/**
 * @param $n Array of numbers that needs to sorted
 * @return array Returns array of numbers sort in desc order
 */
function merge_and_sort($n){

    // check if basecase has been met
    if(count($n) <= 1){
        return $n;
    }
    // determine the middle of the current array
    $middle = ceil(count($n)/2);
    // chunk th array in halfs
    $sides = array_chunk($n, $middle);
    // invoke recursively on each half
    $left = merge_and_sort($sides[0]);
    $right = merge_and_sort($sides[1]);
    // init the return array, otherwise array_push will think you are crazy
    $result  = [];

    // loop until one of the arrays are empty.If the one array is empty that
    // means whatever remains in the other array has to be larger then what
    // was in the last array

    while(count( $left ) > 0 &&  count( $right ) > 0 ){
        if($left[0] < $right[0]){
            array_push($result, array_shift($left));
        } else {
            array_push($result, array_shift($right));
        }
    }
    // check both arrays for remaining values, and put them on the end of the
    // result array
    array_splice($result, count($result), 0, $left);
    array_splice($result, count($result), 0, $right);

    // return the result to the function caller
    return $result;

}

var_dump(merge_and_sort($numbers));