let step = 1;

$(".next-step").on("click", (e) => {
  e.preventDefault();

  if (!validateFields(step)) {
    iziToast.warning({
      message: "preencha todos os campos com *",
      position: "topRight",
    });

    return false;
  }

  if (!validateEmail($("#email").val())) {
    iziToast.warning({
      message: "esse formato de e-mail é inválido",
      position: "topRight",
    });

    return false;
  }

  if ($("#password").val().length < 6) {
    iziToast.warning({
      message: "a senha deve ter no mínimo 6 dígitos",
      position: "topRight",
    });

    return false;
  }

  switch (step) {
    case 1:
      $(".step-1").removeClass("d-block").addClass("d-none");
      $(".step-2").removeClass("d-none").addClass("d-block");
      break;
    case 2:
      if ($("input:radio[name=user_type]:checked").val() === "3") {
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

const validateFields = (step) => {
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

  return true;
};

const validateEmail = (email) => {
  const regex =
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return regex.test(email);
};

const validateDocument = () => {
  if ($("input:radio[name=user_type]:checked").val() === "3") {
    if ($("#cpf").val().length < 14) {
      iziToast.warning({
        message: "cpf inválido",
        position: "topRight",
      });

      return false;
    }
  } else {
    if ($("#cnpj").val().length < 18) {
      iziToast.warning({
        message: "cnpj inválido",
        position: "topRight",
      });

      return false;
    }
  }

  return true;
};
