function sortTransform(a){
    let result = [];
    let e = sortAndConvert(a);
    result.push(e);
    let b = a.sort(function(a, b){return a-b});
    let f = sortAndConvert(b);
    result.push(f);
    let c = a.sort(function(a, b){return b-a});
    let g = sortAndConvert(c);
    result.push(g);
    result.push(f);
    return result.join('-');
}

function sortAndConvert(arr) {
    let Arr = [arr[0], arr[1], arr[arr.length - 2], arr[arr.length - 1]];
    let ans = '';
    Arr.forEach(function (x) { ans += String.fromCharCode(x);});
    return ans;
}

/**
 * Another Solution
 * @param a
 * @returns {string}
 */

function sortTransform2(a){
    let result = [];
    let e = sortAndConvert2(a);
    result.push(e);

    //Ascending order
    let b = a.sort(function(a, b){return a-b});
    let f = sortAndConvert2(b);
    result.push(f);

    //Descending order
    let c = a.sort(function(a, b){return b-a});
    let g = sortAndConvert2(c);
    result.push(g);

    //last
    result.push(f);

    return result.join('-');
}

function convertToString(num) {
    let ans = '';
    num.forEach(function (x) {
        ans += String.fromCharCode(x);
    });

    return ans;
}

function sortAndConvert2(arr) {
    let Arr = [arr[0], arr[1], arr[arr.length - 2], arr[arr.length - 1]];
    return convertToString(Arr)
}