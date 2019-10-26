var dict = [{ "problem": ["text", "อะไรเอย"], "choice": ["1. เย้", "2. ย้ง", "3.ย้าก", "4.โย่ว"], "ans": 4 }, { "problem": ["img", "http://www.google.com/intl/en_com/images/logo_plain.png"], "choice": ["1. เย้1", "2. ย้ง2", "3.ย้าก3", "4.โย่ว45"], "ans": 3 }]
var clause = 0
var point = 0
var choice = ["id1", "id2", "id3", "id4"];
function make() {

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
        point++;
    }
    problem.removeChild(problem.childNodes[1]);
    for (var i in choice) {
        document.getElementById(choice[i]).removeChild(document.getElementById(choice[i]).childNodes[1]);
    }
    clause++;
    make();
}
make();
