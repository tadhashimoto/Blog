function hello() {
    var target = document.getElementById("test");
    target.innerHTML = "この文章は javascript から呼び出された文章です。"
}


function GetDateTime() {
    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth();
    var date = date.getDate();
    var hours = data.getHours();
    var minutes = data.getMinutes();
    var seconds = data.getSeconds();
    return document.write(year + "/" + month + "/" + date + " " + hours + ":" + minutes + ":" + seconds);
}
