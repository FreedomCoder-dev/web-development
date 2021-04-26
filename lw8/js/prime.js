function isPrime(n) {
    if (typeof n === 'number') {
        primeCheckSingle(n);
    } else if (Array.isArray(n)) {
        for (let element of n) {
            primeCheckSingle(element);
        }
    } else {
        console.log("'", n.toString(), "' не является числом");
    }
}

function primeCheckSingle(n) {
    if (typeof n !== 'number') {
        console.log("'", n.toString(), "' не является числом");
        return;
    }
    if (n < 2) {
        console.log(n.toString(), " - число должно быть больше 2");
        return;
    } else if (n === 2) {
        console.log(n.toString(), " - простое число");
        return;
    }

    let i = 2;
    let solverState = " - простое число";
    const limit = Math.sqrt(n) + 1;
    while (i <= limit) {
        if (n % i === 0) {
            solverState = " - сложное число";
            break;
        }
        i += 1;
    }
    console.log(n.toString(), solverState);
}