function ballResult() {
    var prog1 = document.getElementById('prog1').value, /* прогноз голов забитых командой 1*/
        prog2 = document.getElementById('prog2').value, /* прогноз голов забитых командой 2*/
        res1 = document.getElementById('res1').value, /* результат - забитые командой 1*/
        res2 = document.getElementById('res2').value, /* результат - забитые командой 2*/
        ball=8-Math.abs(prog1 - res1)-Math.abs(prog2 - res2); /* формула начисления очков */
    document.getElementById('result').innerHTML = ball; /* вывод начисленнх очков */
}   