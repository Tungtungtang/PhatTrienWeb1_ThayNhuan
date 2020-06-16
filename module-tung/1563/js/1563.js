var dem = 0;
var class_show = "show-demo";

function show() {
    dem++;
    let el = document.getElementById("choose_demo");
    if (dem % 2 != 0) {
        el.classList.add(class_show);
    } else {
        el.classList.remove(class_show);
        dem = 0;
    }
}

function demo_hidden() {
    if ($("." + class_show)[0]) {
        dem = 0;
        document.getElementById("choose_demo").classList.remove(class_show);
    }
}