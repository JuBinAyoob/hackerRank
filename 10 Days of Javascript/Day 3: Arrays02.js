//Hackerrank solution
//solution 1
function getSecondLargest(nums) {
    let max1 = 0;
    for (const e of nums) {
        if (max1 < e) {
            max1 = e;
        }
    }
    
    let max2 = 0;
    for (const e of nums) {
        if (max2 < e && e < max1) {
            max2 = e;
        }
    }
    
    return max2;
}


//solution 2
/**
*   Needed for Arrays.sort() to sort numerically instead of lexicographically.
*   (numerical sorting = 1, 2, 10; lexicographical sorting = 1, 10, 2)
*   @param {Number} a 
*   @param {Number} b
*   @return {Number} The value of a - b.
**/
function comparator(a, b) {
    return a - b;
}

/**
*   Return the second largest number in the array.
*   @param {Number[]} nums
*   @return {Number} The second largest number in the array.
**/
function getSecondLargest(nums) {
    // Sort the array in ascending order
    nums.sort(comparator);
    const max = nums[nums.length - 1];

    // Find the index of the second largest value
    // Set index to end of array
    let index = nums.length - 1;
    // Loop through array from back to front, decrementing index before each iteration
    while (index--) {
        // Return the first integer that is not the maximum 
        // This is guaranteed to be the second-largest value because the array is sorted
        if (nums[index] != max) {
            return nums[index];
        }
    }
    
    // Error: This should only ever be reached if all values in the array are equal.
    return max;
}
