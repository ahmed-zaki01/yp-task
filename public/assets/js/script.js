$("document").ready(function () {
  $("#cities").change(function () {
    var selectedValue = $('#cities option:selected').val();
    // debugger;
    $.ajax({
      url: "http://localhost/yp-task/public/companies/getCityAreas/" + selectedValue,

      success: function (data) {
        console.log(data);
        data = JSON.parse(data);
        $("#areas").empty();
        $("#areas").append('<option value="" disabled selected>Select Area</option>');
        if (data.length > 0) {
          $.each(data, function (key, value) {
            $("<option />", {
              value: value.id,
              text: value.name
            }).appendTo($("#areas"));
          });
        }
      },
      error: function error(error) {

      }
    });
  });
});