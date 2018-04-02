//My solution
'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', inputStdin => {
    inputString += inputStdin;
});

process.stdin.on('end', _ => {
    inputString = inputString.trim().split('\n').map(string => {
        return string.trim();
    });
    
    main();    
});

function readLine() {
    return inputString[currentLine++];
}


/**
*   Return the second largest number in the array.
*   @param {Number[]} nums - An array of numbers.
*   @return {Number} The second largest number in the array.
**/
function getSecondLargest(nums) {
    let intFirstHigh,intSecondHigh;
    if(nums.length>2){
        if (nums[0]>nums[1]){
            intFirstHigh=nums[0];
            intSecondHigh=nums[1];
        }else{
            intFirstHigh=nums[1];
            intSecondHigh=nums[0];
        }
    
        for(let i=2;i<nums.length;i++){
            
            if(nums[i]>intFirstHigh){
                intSecondHigh=intFirstHigh;
                intFirstHigh=nums[i];
            }else if(nums[i]>intSecondHigh && nums[i]<intFirstHigh){
                intSecondHigh=nums[i];
            }
        }
        return intSecondHigh;
    }
    return ;
    
}



function main() {
    const n = +(readLine());
    const nums = readLine().split(' ').map(Number);
    
    console.log(getSecondLargest(nums));
}
