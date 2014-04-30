<? /*
* @description The following is a simple PHP example recursion at work
* @author Billy McDonald <billyjmcdonald@gmail.com>
*/

$number = 10;

/**
 * @param $n Number to compute factorial of
 * @return mixed result of computing factorial of $n
 */
function factor($n){
    // check if base case has been reached, if so return an begin
    // return method results to the caller
    if($n  <= 1){
        return $n;
    } else {
        // multiple n by the result of n - 1
        return ($n * factor($n -1 ));
    }

}