
var chapter = window.location.search.split("=")[1]
// P4 --------------------------------------------------------------- P4 -------------------------------------------------------------
//  {"problem": ["text/img" (เป็นโจทย์รูป หรือ ข้อความ), "โจทย์ หรือ ลิ้งรูป", "ข้อความเพิ่มเติม(ถ้ามีรูปแล้วอยากใส่ข้อความ)(ไม่ใส่ก็ได้)"]}
var chapterP4_100K = [{ "problem": ["text", "๗๙,๐๐๑ อ่านว่าอะไร"], "choice": ["1. เจ็ดหมื่นเก้าพันเอ็ด", "2. เจ็ดหมื่นหกพันเอ็ด", "3. เจ็ดหมื่นเก้าพันหนึ่ง", "4. เจ็ดหมื่นเก้าร้อยเอ็ด"], "ans": 1 }, { "problem": ["text", "สามสิบหกล้านแปดหมื่นสี่พัน ตรงกับข้อใด"], "choice": ["1. 30,684,000", "2. 3,684,000", "3. 36,084,000", "4. 36,840,000"], "ans": 3 }]
var chapterP4_divi = [{ "problem": ["text", "อะไรเอยวะเนี้ย"], "choice": ["1. เย้", "2. ย้ง", "3.ย้าก", "4.โย่ว"], "ans": 4 }, { "problem": ["img", "http://www.google.com/intl/en_com/images/logo_plain.png"], "choice": ["1. บากะ", "2. lol", "3.อยากเล่นเกม", "4.5555+"], "ans": 3 }, { "problem": ["text", "อะไรวะ"], "choice": ["1. กำ", "2. โฮโฮ", "3.Dio", "4.jojo"], "ans": 1 }]
var chapterP4_measure = [{ "problem": ["text", "ohmyGoD"], "choice": ["1. เย้", "2. ย้ง", "3.ย้าก", "4.โย่ว"], "ans": 4 }, { "problem": ["img", "http://www.google.com/intl/en_com/images/logo_plain.png"], "choice": ["1. บากะ", "2. lol", "3.อยากเล่นเกม", "4.5555+"], "ans": 3 }, { "problem": ["text", "อะไรวะ"], "choice": ["1. กำ", "2. โฮโฮ", "3.Dio", "4.jojo"], "ans": 1 }]
var chapterP4_money = [{ "problem": ["text", "lol"], "choice": ["1. เย้", "2. ย้ง", "3.ย้าก", "4.โย่ว"], "ans": 4 }, { "problem": ["img", "http://www.google.com/intl/en_com/images/logo_plain.png"], "choice": ["1. บากะ", "2. lol", "3.อยากเล่นเกม", "4.5555+"], "ans": 3 }, { "problem": ["text", "อะไรวะ"], "choice": ["1. กำ", "2. โฮโฮ", "3.Dio", "4.jojo"], "ans": 1 }]
var chapterP4_multi = [{ "problem": ["text", "ส้มหนึ่งกล่องมี 13 ลูก ถ้ามีส้มอยู่ 7 กล่องจะมีส้มทั้งหมดกี่ลูก"], "choice": ["1. 20", "2. 6", "3. 91", "4. 2"], "ans": 3 }, { "problem": ["text", "หนูนิดซื้อเหมาหนังซื้อเล่มละ 479 บาท มา 38 เล่ม"], "choice": ["1. 18202", "2. 16202", "3. 12202", "4. 14202"], "ans": 1 }]
var chapterP4_plus = [{ "problem": ["text", "กำพกำกำ"], "choice": ["1. เย้", "2. ย้ง", "3.ย้าก", "4.โย่ว"], "ans": 4 }, { "problem": ["img", "http://www.google.com/intl/en_com/images/logo_plain.png"], "choice": ["1. บากะ", "2. lol", "3.อยากเล่นเกม", "4.5555+"], "ans": 3 }, { "problem": ["text", "อะไรวะ"], "choice": ["1. กำ", "2. โฮโฮ", "3.Dio", "4.jojo"], "ans": 1 }]
var chapterP4_smoney = [{ "problem": ["text", "อะไร"], "choice": ["1. เย้", "2. ย้ง", "3.ย้าก", "4.โย่ว"], "ans": 4 }, { "problem": ["img", "http://www.google.com/intl/en_com/images/logo_plain.png"], "choice": ["1. บากะ", "2. lol", "3.อยากเล่นเกม", "4.5555+"], "ans": 3 }, { "problem": ["text", "อะไรวะ"], "choice": ["1. กำ", "2. โฮโฮ", "3.Dio", "4.jojo"], "ans": 1 }]
var chapterP4_time = [{ "problem": ["text", "อ่ะ"], "choice": ["1. เย้", "2. ย้ง", "3.ย้าก", "4.โย่ว"], "ans": 4 }, { "problem": ["img", "http://www.google.com/intl/en_com/images/logo_plain.png"], "choice": ["1. บากะ", "2. lol", "3.อยากเล่นเกม", "4.5555+"], "ans": 3 }, { "problem": ["text", "อะไรวะ"], "choice": ["1. กำ", "2. โฮโฮ", "3.Dio", "4.jojo"], "ans": 1 }]
// P4 --------------------------------------------------------------- P4 -------------------------------------------------------------


// P5 --------------------------------------------------------------- P5 -------------------------------------------------------------
//  {"problem": ["text/img" (เป็นโจทย์รูป หรือ ข้อความ), "โจทย์ หรือ ลิ้งรูป", "ข้อความเพิ่มเติม(ถ้ามีรูปแล้วอยากใส่ข้อความ)(ไม่ใส่ก็ได้)"]}
var chapterP5_angle = [{ "problem": ["img", "http://www.trueplookpanya.com/data/product/examination/Q000022033.jpg", "1. มุม คขง เป็นมุมใด"], "choice": ["1. มุมแหลม", "2. มุมฉาก", "3. มุมตรง", "4. มุมป้าน"], "ans": 1 }, { "problem": ["text", "2. มุมฉาก มีขนาด กี่องศา"], "choice": ["1. มากกว่า 90 องศา", "2. น้อยกว่า 90 องศา", "3. 90 องศา", "4. ถูกทุกข้อ"], "ans": 3 }, { "problem": ["text", "3. มุมแหลม + มุมฉาก มีขนาดเท่ากับมุมใด"], "choice": ["1. มุมตรง", "2. มุมป้าน", "3. มุมกลับ", "4. มุมฉาก"], "ans": 2 }]
var chapterP5_circle = [{ "problem": ["text", "1. รัศมี มีค่าเท่ากับเท่าใด"], "choice": ["1. 2 เท่าของเส้นผ่านศูนย์กลาง", "2. เส้นผ่านศูนย์กลาง", "3. ความยาวรอบรูปวงกลม", "4. ครึ่งนึ่งของเส้นผ่านศูนย์กลาง"], "ans": 4 }, { "problem": ["img", "../images/r.jpg", "2. รัศมี กี่ ซม."], "choice": ["1. 10 ซม.", "2. 20 ซม.", "3. 5 ซม.", "4. 5 เมตร"], "ans": 3 }]
var chapterP5_decimal = [{ "problem": ["text", "1. 220.956 อ่านว่าอย่างไร"], "choice": ["1. สองร้อยยี่สิบจุดเก้าร้อยห้าสิบหก", "2. สองสองศูนย์จุดเก้าร้อยห้าสิบหก", "3. สองร้อยยี่สิบจุดเก้าห้าหก", "4. สองร้อยยี่สิบเก้าห้าหก"], "ans": 3 }, { "problem": ["text", "2. 5.25 + 7.25 = เท่าใด"], "choice": ["1. 12.5", "2. 12.25.25", "3. 9.75", "4. 12"], "ans": 1 }, { "problem": ["text", "3. 4/10 เขียนเป็นทศนิยมได้ข้อใด"], "choice": ["1. 10.4", "2. 4.10", "3. 0.10", "4. 0.4"], "ans": 4 }]
var chapterP5_fraction = [{ "problem": ["text", "1. จำนวนในข้อใดมีค่าเท่ากันทั้งหมด"], "choice": ["1. 2/4 4/8 8/4", "2. 4/16 2/8 1/4", "3. 1/2 2/3 3/4", "4. 2/4 2/5 2/6"], "ans": 2 }, { "problem": ["text", "2. ข้อใดเป็นเศษส่วนแท้"], "choice": ["1. 3/3", "2. 5/4", "3. 1/3 ", "4. 20/2"], "ans": 3 }]
var chapterP5_geometry = [{ "problem": ["img", "../images/145.png", "1. รูปนี้เป็นรูปทรงเรขาคณิตใด"], "choice": ["1. ทรงกระบอก", "2. ปริซึม", "3. ทรงกลม", "4. พีระมิด"], "ans": 4 }, { "problem": ["img", "../images/145.png", "2. รูปนี้เป็นรูปพีระมิดฐานอะไร"], "choice": ["1. ฐานสามเหลี่ยม", "2.  ฐานวงกลม", "3. ฐานหกเหลี่ยม", "4. ฐานห้าเหลี่ยม"], "ans": 3 }, { "problem": ["text", "3. กล่องสี่เหลี่ยม ยาว 1 ซม. กว้าง 1 ซม. สูง 1ซม. มีปริมาตรเท่าใด"], "choice": ["1. 1 ลบ.ซม", "2. 1 ซม.", "3. 3 ลบ.ซม", "4. 3 ซม."], "ans": 1 }]
var chapterP5_square = [{ "problem": ["img", "https://upload.wikimedia.org/wikipedia/commons/1/11/Trapezoid.svg", "1. รูปนี้คือรูปสี่เหลี่ยมใด"], "choice": ["1. สี่เหลี่ยมมุมฉาก", "2. สี่เหลี่ยมคางหมู", "3. สี่เหลี่ยมขนมเปียกปูน", "4. สี่เหลี่ยมด้านขนาน"], "ans": 2 }, { "problem": ["img", "https://sites.google.com/a/samakkhi.ac.th/mathmagic2015/_/rsrc/1437891983091/8-sutr-kar-ha-phunthi-samheliym-hna-caw/1.jpg?height=200&width=320", "2. รูปนี้มีเส้นรอบรูปเท่าใด"], "choice": ["1. 10 ซม.", "2. 18 ซม.", "3. 8 ซม.", "4. 18 ม."], "ans": 2 }, { "problem": ["img", "../images/14.png", "3. รูปนี้มีพื้นที่เท่าใด"], "choice": ["1. 70 เมตร", "2. 17 เมตร", "3. 34 เมตร", "4. 100 เมตร"], "ans": 1 }]
var chapterP5_statistic = [{ "problem": ["img", "../images/math.jpg", "1. รูปนี้คือแผนภูมิอะไร"], "choice": ["1. แผนภูมิแท่ง", "2. แผนภูมิราบ", "3.แผนภูมิเส้น", "4. แผนภูมิวงกลม"], "ans": 4 }, { "problem": ["img", "../images/math.jpg", "2. สีเขียวมีค่าเท่าใด"], "choice": ["1. 12%", "2. 35%", "3. 25%", "4. 15%"], "ans": 1 }]
var chapterP5_triangle = [{ "problem": ["img", "https://sites.google.com/a/web1.dara.ac.th/pythagoras/_/rsrc/1468872458289/--sara-kar-reiyn-ru/--thvsdibth-pi-tha-ko-ras/image00.jpg", "1. รูปนี้คือรูปสามเหลี่ยมใด ถ้าแบ่งตามด้าน"], "choice": ["1. สามเหลี่ยมด้านเท่า", "2. สามเหลี่ยมไม่ด้านเท่า", "3. สามเหลี่ยมหน้าจั่ว", "4. สามเหลี่ยมด้านเท่า 2 ด้าน"], "ans": 2 }, { "problem": ["img", "https://sites.google.com/a/web1.dara.ac.th/pythagoras/_/rsrc/1468872458289/--sara-kar-reiyn-ru/--thvsdibth-pi-tha-ko-ras/image00.jpg", "2. รูปนี้คือรูปสามเหลี่ยมใด ถ้าแบ่งตามมุม"], "choice": ["1. สามเหลี่ยมมุมแหลม", "2. สามเหลี่ยมมุมตรง", "3. สามเหลี่ยมมุมฉาก", "4. สามเหลี่ยมมุมป้าน"], "ans": 3 }, { "problem": ["img", "../images/123.jpg", "รูปนี้มีพื้นที่เท่าใด"], "choice": ["1. 6 ซม.", "2. 12 ซม.", "3. 10 ซม.", "4. 7.5 ซม."], "ans": 1 }]
// P5 --------------------------------------------------------------- P5 -------------------------------------------------------------


// P6 --------------------------------------------------------------- P6 -------------------------------------------------------------
//  {"problem": ["text/img" (เป็นโจทย์รูป หรือ ข้อความ), "โจทย์ หรือ ลิ้งรูป", "ข้อความเพิ่มเติม(ถ้ามีรูปแล้วอยากใส่ข้อความ)(ไม่ใส่ก็ได้)"]}
var chapterP6_1= [{ "problem": ["text", "13 มีตัวประกอบอะไรบ้าง"], "choice": ["1. 0 และ 1 ", "2. 0, 1 และ 13", "3. 1, 3 และ 13", "4. 1 และ 13"], "ans": 4 }, { "problem": ["text", "14 และ 28 มี ค.ร.น คือข้อใด"], "choice": ["1. 14", "2. 2", "3. 14", "4. 28"], "ans": 4 }]
var chapterP6_2 = [{ "problem": ["img", "../images/frac.png"], "choice": ["1. 5/10", "2. 13/12", "0.5", "4. 1/2"], "ans": 2 }, { "problem": ["img", "../images/fracd.png"], "choice": ["1. 1", "2. 1/2", "3. 1/8", "4. 2"], "ans": 1}]
var chapterP6_3= [{ "problem": ["text", "ขนาดของมุมภายในที่อยู่บนข้างเดียวกันของเส้นตัดรวมกันได้กี่องศา"], "choice": ["1. 45 องศา", "2. 90 องศา", "3. 180 องศา", "4. 360 องศา"], "ans": 4 }, { "problem": ["text", "เส้นตรงเส้นหนึ่งตัดเส้นตรงคู่หนี่งทำให้เกิด มุมแย้งมุมแย้งมี 2 แบบ คือ"], "choice": ["1. มุมแย้งภายใน และมุมแย้งภายนอก", "2. มุมแย้งด้านซ้าย และมุมแย้งด้านขวา", "3. ผิดทุกข้อ", "4. ถูกทุกข้อ"] , "ans": 1}]
var chapterP6_4 = [{ "problem": ["text", "A x 15 = 30 เป็นสมการประเภทใด"], "choice": ["1. สมการที่มีตัวไม่ทราบค่า", "2. สมการที่เป็นจริง", "3. สมการที่เป็นเท็จ", "4. ข้อ 1 และข้อ 2 ถูก"], "ans": 1 }, { "problem": ["text", "ข้อใดคือสมการ"], "choice": ["1. 36 = A x B", "2. 7 + 8 > 12", "3. 36 = A x 12", "4. ข้อ 1 และ ข้อ 3 ถูก"], "ans": 4}]
var chapterP6_5 = [{ "problem": ["text", "รูปก้อนมีอัตราส่วน 1:7 ถ้าก้อนหินในรูปยาว 5 เซนติเมตร ถ้าว่าขนาดจริงยาวกี่เซนติเมตร"], "choice": ["1. 12", "2. 20", "3. 35", "4. 40"], "ans": 3 }, { "problem": ["text", "ทิศเหนือกับทิศใต้ทำมุมกี่องศา"], "choice": ["1. 90", "2. 180", "3. 270", "4. 360"], "ans": 2 }]
var chapterP6_6 = [{ "problem": ["text", "42.35 - 13.89 = ?"], "choice": ["1. 27.46", "2. 28.46", "3. 29.46", "4. 56.24"], "ans": 2 }, { "problem": ["text", "12 + 13.87 = ?"], "choice": ["1. 25.87", "2. 2587.00", "3. 13.99", "4. 1399.00"], "ans": 2 }]
var chapterP6_7 = [{ "problem": ["text", "62.78 x 43.9 = ?"], "choice": ["1. 275.642", "2. 2756.420", "3. 2756.42", "4. 2756.042"], "ans": 4 }, { "problem": ["text", "219.86 ÷ 2 = ?"], "choice": ["1. 110.43", "2. 109.50", "3. 109.93", "4. 109.43"], "ans": 3 }]
var chapterP6_8 = [{ "problem": ["text", "กรวยมีฐานเป็นรูปอะไร"], "choice": ["1. รูปวงกลม", "2. รูปสี่เหลี่ยม", "3. รูปสามเหลี่ยม", "4. รูปหกเหลี่ยม"], "ans": 1 }, { "problem": ["text", "กล่องมีความสูง 6 เมตร กว้าง 4 เมตร ยาว 3 เมตร จะมีความจุเท่าไร"], "choice": ["1. 13 เมตร", "2. 13 เซนติเมตร", "3. 72 เซนติเมตร", "4. 72 เซนติเมตร"], "ans": 4 }]
// P6 --------------------------------------------------------------- P6 -------------------------------------------------------------


var dict = { "100k":chapterP4_100K,"divi":chapterP4_divi, "measure":chapterP4_measure, "money":chapterP4_money, "multi":chapterP4_multi, "plus":chapterP4_plus, "smoney":chapterP4_smoney, "time":chapterP4_time
            ,"angle": chapterP5_angle, "circle": chapterP5_circle, "decimal":chapterP5_decimal, "fraction":chapterP5_fraction, "square":chapterP5_square, "statistic":chapterP5_statistic, "triangle":chapterP5_triangle, "geometry":chapterP5_geometry
            ,"1": chapterP6_1, "2": chapterP6_2, "3":chapterP6_3, "4":chapterP6_4, "5":chapterP6_5, "6":chapterP6_6, "7":chapterP6_7, "8":chapterP6_8};

var clause = 0
var point = 0
var id_1 = "ans1";
var id_2 = "ans1";
var choice = ["id1", "id2", "id3", "id4"];
function make() {
    document.getElementById("ch").innerHTML = "ข้อ : "+(clause+1)+" / "+dict[chapter].length;
    if (clause != 0) {
        document.getElementById(id_1).style.backgroundColor = "";
        document.getElementById(id_2).style.backgroundColor = "";
    }
    problem.querySelectorAll('*').forEach(n => n.remove()); 
    for (var i in choice) {
        document.getElementById(choice[i]).removeChild(document.getElementById(choice[i]).childNodes[0]);
    }

    if (dict[chapter][clause]["problem"][0] == "text") {
        var node = document.createElement("H2");
        var textnode = document.createTextNode(dict[chapter][clause]["problem"][1]);
        node.appendChild(textnode);
        document.getElementById("problem").appendChild(node);
    }
    else {
        var img = document.createElement("img");
        if(dict[chapter][clause]["problem"].length == 3){
            var node = document.createElement("H3");
            var textnode = document.createTextNode(dict[chapter][clause]["problem"][2]);
            node.appendChild(textnode);
            document.getElementById("problem").appendChild(node);
        }
        img.src = dict[chapter][clause]["problem"][1];
        var src = document.getElementById("problem");
        src.appendChild(img);
    }
    for (var i in choice) {
        var node = document.createElement("H2");
        var textnode = document.createTextNode(dict[chapter][clause]["choice"][i]);
        node.appendChild(textnode);
        document.getElementById(choice[i]).appendChild(node);
    }
}
function check(ans) {

    if (ans == dict[chapter][clause]["ans"]) {
        id_1 = "ans" + ans;
        document.getElementById(id_1).style.backgroundColor = "green";
        point++;
    }
    else {
        id_1 = "ans" + ans;
        id_2 = "ans" + dict[chapter][clause]["ans"];
        document.getElementById(id_1).style.backgroundColor = "#B22222";
        document.getElementById(id_2).style.backgroundColor = "#006400";
    }
    clause++;
    if (clause < dict[chapter].length) {

        setTimeout(function () { make() }, 1500);

    }
    else {
        setTimeout(function () { document.getElementById('end').style.display = 'block'; total.innerText = point+" / "+dict[chapter].length;id1.style.display = 'none'; id2.style.display = 'none';id3.style.display = 'none';id4.style.display = 'none'; }, 750);
    }


}
function start(){
    window.location.reload();   //รีเฟรซหน้า (เหมือน F5)
    document.getElementById('endGame').style.display = 'none';  //ซ่อนหน้า endGame
}
function go(){
    window.location.href = "answer.html?chapter="+chapter;
}
if (window.location.pathname.split(/(\\|\/)/g).pop() == "test.html"){
    make();

}
