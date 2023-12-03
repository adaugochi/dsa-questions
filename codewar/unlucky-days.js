function unluckyDays(year){
    let count = 0;
    for (let m = 0; m < 12; m++) {
        let d = new Date(year, m, 13);
        if (d.getDay() === 5) {
            count++;
        }
    }
    return count;
}