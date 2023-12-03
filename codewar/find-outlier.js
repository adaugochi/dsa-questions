function findOutlier(integers){
    const odd = [];
    const even = [];

    for (let i = 0; i < integers.length; i++) {
        if (integers[i] % 2 === 0) {
            even.push(integers[i]);
        } else {
            odd.push(integers[i]);
        }
    }
    if (odd.length < even.length) {
        return odd.pop();
    } else {
        return even.pop();
    }
}