function  calc(calcStr) {
    calcStr = calcStr.replace(/[()]/g, ' ');
    calcStr = calcStr.replace(/\s+/g, ' ').trim();
    let symbAndNum = calcStr.split(' ');
    
    let i = 0;
    let div0 = false;
    let missChStr = false;
    let corrStr = true;

    for (let k = 0; k < symbAndNum.length; k++) {
        if (!((isFinite(symbAndNum[k])) ||
             ((symbAndNum[k] == '*')    ||
              (symbAndNum[k] == '/')    || 
              (symbAndNum[k] == '+')    || 
              (symbAndNum[k] == '-')))) {
            corrStr = false;
        } 
    }

    while (symbAndNum.length > 1) {
        if (!corrStr) {
            break;
        }

        if (symbAndNum.length < 3)  {
            missChStr = true;
            break;
        }

        if (((symbAndNum[i] === '*') ||
            (symbAndNum[i] === '/') ||
             (symbAndNum[i] === '+') ||
             (symbAndNum[i] === '-')) &&
             (isFinite(symbAndNum[i + 1])) && 
             (isFinite(symbAndNum[i + 2])) ) {
            symbAndNum[i] = mathematics(symbAndNum[i], symbAndNum[i + 1], symbAndNum[i + 2]);
            
            if (symbAndNum[i] == 'Infinity') {
                div0 = true;
                break;
            }
            
            delete symbAndNum[i + 1];
            delete symbAndNum[i + 2];
            for (let j = i + 1; j < symbAndNum.length - 2; j++) {
                symbAndNum[j] = symbAndNum[j + 2];
            }
            symbAndNum.pop();
            symbAndNum.pop();

            i = 0;
        } else {
            i++;
        }
    }

    if (missChStr) {
        console.log('Ошибка: недостающие данные');
    } else if (!corrStr) {
        console.log('Ошибка: некорректно введенные данные');
    }  else if (div0) {
        console.log('Ошибка: попытка деления на ноль');
    } else {
        symbAndNum = parseFloat(symbAndNum);
        console.log(symbAndNum);
    }        
    
}

function mathematics(oper, firstNum, secNum) {
    switch(oper) {
        case '/' : {
            firstNum = parseFloat(firstNum) / parseFloat(secNum);
            break
        }
        case '*' : {
            firstNum = parseFloat(firstNum) * parseFloat(secNum);
            break
        }
        case '+' : {
            firstNum = parseFloat(firstNum) + parseFloat(secNum);
            break
        }
        case '-' : {
            firstNum = parseFloat(firstNum) - parseFloat(secNum);
            break
        }
    }
    firstNum = firstNum.toString();
    return firstNum;
} 