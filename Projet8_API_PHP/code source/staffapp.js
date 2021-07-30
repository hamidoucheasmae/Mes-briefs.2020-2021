$(document).ready(function () {
    var staffsList;
    function getall() {
        $(".staffsList").html("");
        $.ajax({
            url: "api/getStaffs.php",
            method: "GET",
            success: function (data) {
                staffsList = JSON.parse(data);
                for (var i = 0; i < staffsList.length; i++) {
                    $(".staffsList").append(`<tr> 
                   <td>${staffsList[i]["Name"]}</td>
                   <td>${staffsList[i]["Fathername"]}</td>
                   <td>${staffsList[i]["Occupation"]}</td>
                   <td>${staffsList[i]["Gmail"]}</td>
                   <td><button type="button" class="btn btn-success update-btn" data-toggle="modal" data-target="#exampleModalCenter2">
                   Edit
                 </button></td>
                   <td><button type="button" class="btn btn-danger">
                   Delete
                 </button></td>
                 <input type="hidden" class="idtd"></input>
                   
                   </tr>`)
                }
            }
        })
    }
    getall()

    // Add to database
    $(".submit").click(function () {
        var Name = $(".Name").val();
        var Fathername = $(".Fathername").val();
        var Occupation = $(".Occupation").val();
        var Gmail = $(".Gmail").val();

        $.ajax({
            url: "api/addStaffs.php",
            method: "POST",
            data: {
                Name: Name,
                Fathername: Fathername,
                Occupation: Occupation,
                Gmail: Gmail,
            },
            success: function (data) {
                getall();
            }
        })
    })

    $(".submit").click(function () {
        $("#exampleModalCenter").modal('hide');
    });


    // Delete 
    $("body").on("click", ".btn-danger", function () {
        var index = $(this).parents("tr").index();
        $(".staffsList .idtd").val(staffsList[index]["id"]);
        console.log(staffsList)
        var staffsId = $(".staffsList .idtd").val();
        console.log(staffsId)

        $.ajax({
            url: "api/deleteStaffs.php",
            method: "POST",
            data: {
                id: staffsId
            },
            success: function (data) {
                $(this).parent().remove();
                getall();
            }
        })
    })
    $(".save-former").click(function () {
        $("#exampleModalCenter2").modal('hide');
    });
    $(".submit").click(function () {
        $("#exampleModalCenter").modal('hide');
    });

})
//edit-btn-on-click
$("body").on("click",".staffsList .update-btn",function() {
    
    console.log('show baby')
      $(".edit-form").show();
      var index = $(this).parents("tr").index();
      $(".edit-form .Name").val(staffsList[index]["Name"]);
      $(".edit-form .Fathername").val(staffsList[index]["Fathername"]);
      $(".edit-form .Occupation").val(staffsList[index]["Occupation"]);
      $(".edit-form .Gmail").val(staffsList[index]["Gmail"]);
      $(".edit-form .sid").val(staffsList[index]["id"]);
    });



