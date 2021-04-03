$(() => {
  let step = 1;

  $(".next-step").on("click", (e) => {
    e.preventDefault();

    if (!verifyFields(step)) {
      iziToast.warning({
        message: "preencha todos os campos com *",
        position: "topRight",
      });

      return false
    }

    switch (step) {
      case 1:
        $(".step-1").removeClass("d-block").addClass("d-none");
        $(".step-2").removeClass("d-none").addClass("d-block");
        break;
      case 2:
        if ($("input:radio[name=user_type]:checked").val() === '3') {
          $(".cnpj").removeClass("d-block").addClass("d-none");
          $(".cpf").removeClass("d-none").addClass("d-block");
        } else {
          $(".cpf").removeClass("d-block").addClass("d-none");
          $(".cnpj").removeClass("d-none").addClass("d-block");
        }

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

  const verifyFields = (step) => {
    switch (step) {
      case 1:
        if (
          $("#name").val() === "" ||
          $("#email").val() === "" ||
          $("#login").val() === "" ||
          $("#password").val() === ""
        ) {
          return false;
        }
        break;

      case 2:
        if ($("input:radio[name=user_type_id]:checked").val() === "") {
          return false;
        }
        break;

      default:
        break;
    }

    return true
  }
})
