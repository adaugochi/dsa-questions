function sumDigPow(a, b) {
    const result = [];

    for (let i = a; i <= b; i++) {
        const str = i.toString();
        const len = str.length;

        if (len === 1) {
            result.push(i);
        } else {
            let cal = 0;
            for (let j = 0; j < len; j++) {
                const pow = j + 1;
                const num = parseInt(str[j], 10);
                cal += Math.pow(num, pow);
            }
            if (cal === i) {
                result.push(i);
            }
        }
    }

    return result;
}