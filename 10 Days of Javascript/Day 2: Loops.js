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

function vowelsAndConsonants(s){
    let cns="";
    for(var i=0;i<s.length;i++)
        if(s[i]=='a'||s[i]=='e'||s[i]=='i'||s[i]=='o'||s[i]=='u')
            console.log(s[i]);
        else
            cns += s[i]+"\n";
    console.log(cns);
}

function main() {
    const s = readLine();
    
    vowelsAndConsonants(s);
}


//Other approches
//1
/*
// Returns a boolean denoting whether or not c is a vowel
function isVowel(c) {
    return 'aeiou'.indexOf(c) !== -1;
}

function vowelsAndConsonants(s) {
    let v = [];
    let c = [];
    
    // For each character in the string:
    for (const e of s) {
        if (isVowel(e)) {
            v.push(e);
        } else {
            c.push(e);
        }
    }
    
    // Print vowels
    for (let e of v) {
        console.log(e);
    }
    
    // Print consonants
    for (const e of c) {
        console.log(e);
    }
}
*/
