let mn1 = [];
let mn2 = [];
let relation = [];
let count1;
let count2;



function append() {
    let mn1temp;
    let mn2temp;
    let reltemp;
    mn1 = [];
    mn2 = [];
    relation = [];
    count1 = 0;
    count2 = 0;
    mn1temp = (document.getElementById("mn1").value).split(' ')
    count1 = mn1temp.length;
    if (ifval(mn1temp) === true) {
        mn1.push(mn1temp)
    }
    mn2temp = (document.getElementById("mn2").value).split(' ')
    count2 = mn2temp.length;
    if (ifval(mn2temp) === true) {
        mn2.push(mn2temp)
    }
    reltemp = (document.getElementById("rel").value).split(', ')
    if(reltemp.length < 1)
        alert("Добавьте хотябы один элемент отношения!")
    for(let i = 0; i < reltemp.length; i++) {
        if (reltemp[i].length === 3) {
            if (ifval(reltemp[i].split(' ')) === true) {
                relation.push(reltemp[i])
            }
        } else
            alert("Некоректный ввод одного из элементов отношения!")
    }
    temp = []
    for (let i = 0; i < relation.length; i++){
        temp.push(relation[i].split(' '))
    }
    relation = temp;
}

function clear_(){
    document.getElementById("mn1").value = ""
    document.getElementById("mn2").value = ""
    document.getElementById("rel").value = ""
    document.getElementById("res").innerHTML = "Результат: "
}


function ifval(temp) {
    let ok = true
    if (temp.length < 1) {
        alert("Добавьте хотябы один элемент!")
        ok = false
    }
    for (let i = 0; i < temp.length; i++) {
        for (let j = 0; j < temp[i].length; j++) {
            if (temp[i][j] < '1' || temp[i][j] > '9' && temp[i][j].lower < 'a' || temp[i][j].lower > 'z') {
                alert(temp[i][j] + " - недопустимый символ!")
                ok = false
            }
        }
    }
    return ok
}

function analyze_(){
    append()
    let isFunc = true
    let relMatrix = [];
    for(let i = 0; i < count1; i++){
        relMatrix[i] = []
        for(let j = 0; j < count2; j++){
            for(let y = 0; y < relation.length; y++){
                if(relation[y][0] === mn1[0][i] && relation[y][1] === mn2[0][j]){
                    relMatrix[i][j] = 1;
                }else if(relMatrix[i][j] !== 1){
                    relMatrix[i][j] = 0;
                }
            }
        }
    }
    for(let i = 0; i < count1; i++){
        let s = 0
        for (let j = 0; j < count2; j++) {
            s += relMatrix[i][j]
        }
        if (s !== 1)
            isFunc = false
    }
    document.getElementById("res").innerHTML = (isFunc ? "" : "Не ") + "является функцией"
}