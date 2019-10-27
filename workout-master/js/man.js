var dict = [{ "problem": ["text", "อะไรเอย"], "choice": ["1. เย้", "2. ย้ง", "3.ย้าก", "4.โย่ว"], "ans": 4 }, { "problem": ["img", "http://www.google.com/intl/en_com/images/logo_plain.png"], "choice": ["1. บากะ", "2. lol", "3.อยากเล่นเกม", "4.5555+"], "ans": 3 }, { "problem": ["text", "อะไรวะ"], "choice": ["1. กำ", "2. โฮโฮ", "3.Dio", "4.jojo"], "ans": 1 }]
var clause = 0
var point = 0
var id = "ans1";
var id2 = "ans1";
var choice = ["id1", "id2", "id3", "id4"];
function make() {
    document.getElementById("ch").innerHTML = "ข้อ : "+(clause+1)+" / "+dict.length;
    if (clause != 0) {
        document.getElementById(id).style.backgroundColor = "";
        document.getElementById(id2).style.backgroundColor = "";
    }
    problem.removeChild(problem.childNodes[0]);
    for (var i in choice) {
        document.getElementById(choice[i]).removeChild(document.getElementById(choice[i]).childNodes[0]);
    }

    if (dict[clause]["problem"][0] == "text") {
        var node = document.createElement("H2");
        var textnode = document.createTextNode(dict[clause]["problem"][1]);
        node.appendChild(textnode);
        document.getElementById("problem").appendChild(node);
    }
    else {
        var img = document.createElement("img");
        img.src = dict[clause]["problem"][1];
        var src = document.getElementById("problem");
        src.appendChild(img);
    }
    for (var i in choice) {
        var node = document.createElement("H2");
        var textnode = document.createTextNode(dict[clause]["choice"][i]);
        node.appendChild(textnode);
        document.getElementById(choice[i]).appendChild(node);
    }
}
function check(ans) {

    if (ans == dict[clause]["ans"]) {
        id = "ans" + ans;
        document.getElementById(id).style.backgroundColor = "green";
        point++;
    }
    else {
        id = "ans" + ans;
        id2 = "ans" + dict[clause]["ans"];
        document.getElementById(id).style.backgroundColor = "#B22222";
        document.getElementById(id2).style.backgroundColor = "#006400";
    }
    clause++;
    if (clause < dict.length) {

        setTimeout(function () { make() }, 1500);

    }
    else {
        setTimeout(function () { document.getElementById('end').style.display = 'block'; total.innerText = point;  }, 750);
    }


}
function start(){
    window.location.reload();   //รีเฟรซหน้า (เหมือน F5)
    document.getElementById('endGame').style.display = 'none';  //ซ่อนหน้า endGame
}
function go(){
    window.location.href = "answer.html";
}
make();

