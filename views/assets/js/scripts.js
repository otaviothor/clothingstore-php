$(".btn-show-password").on("click", () => {
  $(".btn-show-password-icon").toggleClass("fa-eye fa-eye-slash");
  if ($("#password").attr("type") == "password") {
    $("#password").attr("type", "text");
  } else {
    $("#password").attr("type", "password");
  }
});

const imagePreview = (input) => {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(".image-preview").attr("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
};
