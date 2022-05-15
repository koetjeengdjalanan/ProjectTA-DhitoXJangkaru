$("#school").change(function () {
    if ($(this).val() == 0) {
        // console.log($(this));
        $("#major").prop("disabled", true);
        $("#major").html("<option value='0'>--Select Major--</option>");
    } else {
        // console.log($(this));
        $("#major").prop("disabled", false);
        fetch("http://localhost:21280/registration/major/" + $(this).val())
            .then((res) => res.json())
            .then((data) => {
                let major = data;
                $("#major").html("<option value='0'>--Select Major--</option>");
                major.map(function (major) {
                    // console.log(major.name);
                    $("#major").append(
                        "<option value='" +
                            major.name +
                            "'>" +
                            major.name +
                            "</option>"
                    );
                });
            });
    }
});

function generateID() {
    let year = new Date().getFullYear().toString().substring(2);
    // console.log("Function Called | " + year);
    if ($("#major").val().includes("S1")) {
        // console.log($("#school").val() + "11");
        latestId("11" + $("#campusPlace").val() + $("#school").val() + year);
    }
    if ($("#major").val().includes("S2")) {
        // console.log($("#school").val() + "12");
        latestId("12" + $("#campusPlace").val() + $("#school").val() + year);
    }
    if ($("#major").val().includes("S3")) {
        // console.log($("#school").val() + "13");
        latestId("13" + $("#campusPlace").val() + $("#school").val() + year);
    }
    if ($("#major").val().includes("D3")) {
        // console.log($("#school").val() + "14");
        latestId("14" + $("#campusPlace").val() + $("#school").val() + year);
    }
}

function latestId(params) {
    console.log(params);
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        if (xhttp.readyState == 4) {
            const res = parseInt(this.responseText) + 1;
            $("#sso_id").val(params + String(res).padStart(4, "0"));
        } else {
            $("#sso_id").val(params + "0001");
        }
    };
    xhttp.open(
        "GET",
        `http://localhost:21280/registration/requestSSO/${params}`
    );
    xhttp.send();
}

// Input Mask

$("#birthday").mask("9999/99/99");
