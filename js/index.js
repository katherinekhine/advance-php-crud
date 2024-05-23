$(document).ready(function () {
  // Adding users
  $(document).on("submit", "#addform", function (e) {
    e.preventDefault();
    // AJAX request
    $.ajax({
      url: "/php_advance_crud/ajax.php",
      type: "POST",
      dataType: "json",
      data: new FormData(this),
      processData: false,
      contentType: false,
      beforeSend: function () {
        console.log("Wait... Data is loading");
      },
      success: function (response) {
        console.log("AJAX Success:", response);
        if (response) {
          console.log("Response received. Hiding modal and resetting form.");
          $("#usermodal").modal("hide");
          console.log("Modal hidden.");
          $("#addform")[0].reset();
          console.log("Form reset.");
        } else {
          console.log("Empty response received.");
        }
      },
      error: function (xhr, status, error) {
        console.log("AJAX error:", status, error);
      },
    });
  });
  // get users functions
});
