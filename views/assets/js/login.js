let step = 1;

$(".next-step").on("click", (e) => {
  e.preventDefault();
  switch (step) {
    case 1:
      $(".step-1").removeClass("d-block").addClass("d-none");
      $(".step-2").removeClass("d-none").addClass("d-block");
      break;
    case 2:
      $(".step-2").removeClass("d-block").addClass("d-none");
      $(".step-3").removeClass("d-none").addClass("d-block");
      break;
  }
  step++;
});

$(".prev-step").on("click", (e) => {
  e.preventDefault();
  switch (step) {
    case 2:
      $(".step-1").removeClass("d-none").addClass("d-block");
      $(".step-2").removeClass("d-block").addClass("d-none");
      break;
    case 3:
      $(".step-2").removeClass("d-none").addClass("d-block");
      $(".step-3").removeClass("d-block").addClass("d-none");
      break;
  }
  step--;
});

$(".btn-recover-password").on("click", (e) => {
  e.preventDefault();
  $(".form-login").toggleClass("d-none");
  $(".form-recover-password").toggleClass("d-none");
});