$(function () {
    $("#sendMessage").click(function () {
        $.ajax({
            url: "CommentPostingManager.php",
            type: "post",
            dataType: "json",
            data: {
                name: $("#name").val(),
                message: $("#message").val()
            },
        })
            .done(function (response) {

                $("#result").val("success");
                $("#detail").val(response.value);
                var temp = "";
                response.forEach(function (value) {
                    var name = value[0];
                    var comment = value[1];
                    var date = value[2];
                    temp += "<p>" + name + "「" + comment + "」" + date + "</p>";
                });

                var p = document.getElementById("messages");
                p.innerHTML = temp;
            })
            .fail(function (XMLHttpRequest, textStatus, errorThrown) {

                $("#result").val("失敗");
                console.log("ajax通信に失敗");
                console.log("XMLHttpRequest : " + XMLHttpRequest.status);
                console.log("textStatus : " + textStatus);
                console.log("errorThrown : " + errorThrown.message);
            })
    })
});
