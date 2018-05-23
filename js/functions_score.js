function calc01(score1, score2, parm) {
  var goal1 = 0,
    goal2 = 0,
    goal1p = 0,
    goal2p = 0,
    okm = 0,
    orm = 0,
    pos = 0,
    shtraf = 0,
    f_ot = false;

  if (score1.replace(" ", "") === "" || score2.replace(" ", "") === "" || score1 === "0" || score2 === "0") {
    return "";
  }

  score1 = score1.replace(":", "-");
  score1 = score1.replace("î", "o");
  score1 = score1.replace("á", "o");

  score2 = score2.replace(":", "-");
  score2 = score2.replace("î", "o");
  score2 = score2.replace("á", "o");

  f_ot = score1.toLowerCase().indexOf("o") >= 0

  pos = score1.indexOf("-")
  goal1 = parseInt(score1);
  goal2 = parseInt(score1.slice(pos + 1));

  if (Math.abs(goal1 - goal2) === 1 && f_ot) {
    if (goal1 > goal2)
      goal1 = goal2;
    else
      goal2 = goal1;
  }

  pos = score2.indexOf("-");
  goal1p = parseInt(score2);
  goal2p = parseInt(score2.slice(pos + 1));

  var ishod = Math.sign(goal1p - goal2p) === Math.sign(goal1 - goal2);
  okm = Math.abs(goal1 - goal1p) + Math.abs(goal2 - goal2p);
  orm = Math.abs((goal1p - goal2p) - (goal1 - goal2));
  shtraf = okm + orm * 1.5;

  var res = "";
  if (ishod)
    res = tableshtraf01(shtraf);
  else if (!ishod && shtraf <= 2.5)
    res = 1;
  else {
    res = 0;
    shtraf = 0;
  }

  switch (parm) {
    case 1:
      res = (shtraf == 0 && !ishod ? "-" :
        shtraf);
      break;
    case 2:
      res = calc01 + " (" + (shtraf == 0 && !ishod ? "-" : shtraf) + ")";
      break;
  }
  return res;
}

function tableshtraf01(shtraf) {
  var ret = 0;

  if (shtraf == 0)
    ret = 9;
  else if (shtraf >= 2 && shtraf <= 2.5)
    ret = 7;
  else if (shtraf >= 4 && shtraf <= 6)
    ret = 6;
  else if (shtraf >= 6.5 && shtraf <= 9)
    ret = 5;
  else if (shtraf >= 9, 5 && shtraf <= 12)
    ret = 4;
  else if (shtraf >= 12)
    ret = 3;

  return ret;
}

function onClick() {
  res.innerText = calc01(iScore1.value, iScore2.value);
}


function runTests() {
  var tests = [
    ["3-2", "3-2", "9"],
    ["3-2", "4-3", "7"],
    ["3-3", "4-4", "7"],
    ["3-2", "4-2", "7"],
    ["3-2", "5-4", "6"],
    ["3-3", "5-5", "6"],
    ["3-2", "5-3", "6"],
    ["3-2", "5-2", "6"],
    ["3-2", "4-1", "6"],
    ["3-2", "6-5", "6"],
    ["3-3", "6-6", "6"],
    ["3-2", "6-4", "5"],
    ["3-2", "6-3", "5"],
    ["3-2", "6-2", "5"],
    ["3-2", "4-0", "5"],
    ["3-2", "7-6", "5"],
    ["3-3", "7-7", "5"],
    ["3-2", "7-5", "5"],
    ["3-2", "7-4", "5"],
    ["3-2", "7-3", "4"],
    ["3-2", "7-2", "4"],
    ["3-3", "8-8", "4"],
    ["3-2", "8-6", "4"],
    ["3-2", "8-5", "4"],
    ["3-2", "8-4", "4"],
    ["3-3", "9-9", "4"],
    ["3-2", "8-2", "3"],
    ["3-3", "10-10", "3"],
    ["3-2", "14-1", "3"],
    ["3-2", "3-3", "1"],
    ["4-4", "3-4", "1"],
    ["2-0", "1-2", "0"],
    ["3-3", "4-2", "0"]
  ];
  var resTests = tests.map(t => calc01(t[0], t[1]) == t[2]);
  var percent = (resTests.filter(f => f).length / tests.length) * 100;
  res.innerText = "percent true " + percent + "%";
}