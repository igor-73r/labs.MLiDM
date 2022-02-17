var errmsg = ''
function  ifval(arr, pos)
{
    ok = false
    let mass
    if (arr.length > 0) {
        mass = arr.split(' ')
        for (var i = 0; i < mass.length; i++){
            if (mass[i].length > 4 || mass[i].length < 4) {
                errmsg += ('\nДлина ' + (i + 1) + "го эллемента " + pos + "го массива не равна 4м")
                continue
            }
            for (var j = 0; j < mass[i].length; j++) {
                if (j !== 1) {
                    if (isNaN(mass[i][j]) === true)
                        errmsg += ('\n' + (j + 1) + 'й символ ' + (i + 1) + 'го эллемента ' + pos + 'го массива - массива не цифра!')
                    else if (j !== 3 && mass[i][j] % 2 !== 0)
                        errmsg += ('\n' + (j + 1) + 'й символ ' + (i + 1) + 'го эллемента ' + pos + 'го массива - нечетная цифра!')
                    else if (j === 3 && mass[i][j] % 2 === 0)
                        errmsg += ('\n' + (j + 1) + 'й символ ' + (i + 1) + 'го эллемента ' + pos + 'го массива - четная цифра!')
                }
                else if (isNaN(mass[i][j]) === false) {
                    errmsg += ('\n' + (j + 1) + 'й символ ' + (i + 1) + 'го эллемента ' + pos + 'го массива - массива не буква!')
                }
            }
        }
    }
    else
        errmsg += ('\n' + pos + 'й пустой!')
    if (errmsg === '')
        ok = true
    return ok
}


function main()
{
    let arr1 = document.getElementById('mass1')
    let arr2 = document.getElementById('mass2')

    if (ifval(arr1.value, 1) === false && ifval(arr2.value, 2) === false) {
        alert(errmsg)
        errmsg = ''
    }
    else if (ifval(arr1.value, 1) === false || ifval(arr2.value, 2) === false) {
        alert(errmsg)
        errmsg = ''
    }
    else
        alert('Валидация прошла успешно!')


}