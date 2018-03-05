process.stdin.resume();
process.stdin.setEncoding('ascii');

var input_stdin = "";
var input_stdin_array = "";
var input_currentline = 0;

process.stdin.on('data', function (data) {
    input_stdin += data;
});

process.stdin.on('end', function () {
    input_stdin_array = input_stdin.split("\n");
    main();    
});

function readLine() {
    return input_stdin_array[input_currentline++];
}


function theLoveLetterMystery(s){
    var len=s.length,count=0;
    for(i=0;i<len/2;i++){
        if(s.charCodeAt(i)==s.charCodeAt(len-i-1))
            continue;
        var left=s.charCodeAt(i);
        var right=s.charCodeAt(len-i-1);
        while(!(left==right)){
            if(left>right)
                left--;
            else
                right--;
            count++;
        }
    }
    return count;
}

function main() {
    var q = parseInt(readLine());
    for(var a0 = 0; a0 < q; a0++){
        var s = readLine();
        var result = theLoveLetterMystery(s);
        process.stdout.write("" + result + "\n");
    }

}
