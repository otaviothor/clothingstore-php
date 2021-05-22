setTimeout(() => {
  $("#loading").addClass("animate__animated");
  $("#loading").addClass("animate__fadeOut");
  setTimeout(() => {
    $("#loading").removeClass("animate__animated");
    $("#loading").removeClass("animate__fadeOut");
    $("#loading").css("display", "none");
  }, 700);
}, 800);

$(".btn-show-password").on("click", () => {
  $(".btn-show-password-icon").toggleClass("fa-eye fa-eye-slash");
  if ($("#password").attr("type") == "password") {
    $("#password").attr("type", "text");
  } else {
    $("#password").attr("type", "password");
  }
});

$(() => {
  $('[data-toggle="tooltip"]').tooltip();
});
