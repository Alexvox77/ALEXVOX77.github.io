 <?php
 $to = "alexvox77@icloud.com"; // емайл получателя данных из формы
 $tema = "Форма BIURO"; // тема полученного емайла
 $first_name = $_POST['first_name'] ?? '';
 $last_name = $_POST['last_name'] ?? '';
 $email = $_POST['email'] ?? '';
 $phone = $_POST['phone'] ?? '';
 $message = "Imię: " . $first_name . "<br>"; //присвоить переменной значение, полученное из формы name=name
 $message .= "Nazwisko: " . $last_name . "<br>"; //присвоить переменной значение, полученное из формы name=name
 $message .= "E-mail: " . $email . "<br>"; //полученное из формы name=email
 $message .= "Numer telefonu: " . $phone . "<br>"; //полученное из формы name=phone
 $headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
 $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
 mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>

<!DOCTYPE html>
<html lang="en" class="page">
    <head>
		<meta name="facebook-domain-verification" content="{{fb_domain_verification}}" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Formula Bogactwa Form</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/main.min.css" />
		<link rel="stylesheet" href="css/form.css">

		<!-- Facebook Pixel Code -->
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            {*fbpixels*}
            fbq("track", "PageView");
        </script>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id={{fbpixel}}&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
    </head>

    <body>
        <header class="header">
            <div class="header__content">
                <a href="/"><img src="fonts/logo.svg" alt="Formula Bogactwa" /></a>
                <div class="header__counter counter">
                    <p class="counter__left">Obecnierejestruje się</p>
                    <p class="counter__right">
                        <span class="counter__number" id="counter">290</span><br />
                        osób
                    </p>
                </div>
            </div>
        </header>

        <section class="hero">
            <div class="hero__content">
                <h1 class="page__title">BIURO ANTYKRYZYSOWYCH ROZWIĄZAŃ</h1>
                <h2 class="hero__subtitle">Twoje zgłoszenie zostało zaakceptowane. <br>Skontaktujemy się z Tobą w ciągu 10-15 minut w godzinach pracy</h2>


        <footer class="footer">
            <a href="https://policies.google.com/privacy?hl=pl" target="_blank">Polityka prywatności</a>
        </footer>


		<!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/main.js"></script>

        <!-- intlTelInput -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css" />
        <script  src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js" ></script>

        <style>
            .error {
                background-color: rgba(255, 0, 0, 0.5) !important;
				color: #fff !important;
            }
        
            .valid {
                background-color: rgba(0, 255, 0, 0.5) !important;
            }
        
            .register-form {
                position: relative;
            }
        
            .loader {
                display: none;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 0;
                z-index: 99999999;
                background: rgba(0, 0, 0, 0.5);
            }
        
            body.loader {
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 11px;
                z-index: 9999;
                background: rgba(0, 0, 0, 0.5);
            }
        
            .cssload-thecube {
                width: 73px;
                height: 73px;
                margin: 0 auto;
                margin-top: 49px;
                position: relative;
                transform: rotateZ(45deg);
                -o-transform: rotateZ(45deg);
                -ms-transform: rotateZ(45deg);
                -webkit-transform: rotateZ(45deg);
                -moz-transform: rotateZ(45deg);
            }
        
            .cssload-thecube .cssload-cube {
                position: relative;
                transform: rotateZ(45deg);
                -o-transform: rotateZ(45deg);
                -ms-transform: rotateZ(45deg);
                -webkit-transform: rotateZ(45deg);
                -moz-transform: rotateZ(45deg);
            }
        
            .cssload-thecube .cssload-cube {
                float: left;
                width: 50%;
                height: 50%;
                position: relative;
                transform: scale(1.1);
                -o-transform: scale(1.1);
                -ms-transform: scale(1.1);
                -webkit-transform: scale(1.1);
                -moz-transform: scale(1.1);
            }
        
            .cssload-thecube .cssload-cube:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgb(43, 160, 199);
                animation: cssload-fold-thecube 2.76s infinite linear both;
                -o-animation: cssload-fold-thecube 2.76s infinite linear both;
                -ms-animation: cssload-fold-thecube 2.76s infinite linear both;
                -webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
                -moz-animation: cssload-fold-thecube 2.76s infinite linear both;
                transform-origin: 100% 100%;
                -o-transform-origin: 100% 100%;
                -ms-transform-origin: 100% 100%;
                -webkit-transform-origin: 100% 100%;
                -moz-transform-origin: 100% 100%;
            }
        
            .cssload-thecube .cssload-c2 {
                transform: scale(1.1) rotateZ(90deg);
                -o-transform: scale(1.1) rotateZ(90deg);
                -ms-transform: scale(1.1) rotateZ(90deg);
                -webkit-transform: scale(1.1) rotateZ(90deg);
                -moz-transform: scale(1.1) rotateZ(90deg);
            }
        
            .cssload-thecube .cssload-c3 {
                transform: scale(1.1) rotateZ(180deg);
                -o-transform: scale(1.1) rotateZ(180deg);
                -ms-transform: scale(1.1) rotateZ(180deg);
                -webkit-transform: scale(1.1) rotateZ(180deg);
                -moz-transform: scale(1.1) rotateZ(180deg);
            }
        
            .cssload-thecube .cssload-c4 {
                transform: scale(1.1) rotateZ(270deg);
                -o-transform: scale(1.1) rotateZ(270deg);
                -ms-transform: scale(1.1) rotateZ(270deg);
                -webkit-transform: scale(1.1) rotateZ(270deg);
                -moz-transform: scale(1.1) rotateZ(270deg);
            }
        
            .cssload-thecube .cssload-c2:before {
                animation-delay: 0.35s;
                -o-animation-delay: 0.35s;
                -ms-animation-delay: 0.35s;
                -webkit-animation-delay: 0.35s;
                -moz-animation-delay: 0.35s;
            }
        
            .cssload-thecube .cssload-c3:before {
                animation-delay: 0.69s;
                -o-animation-delay: 0.69s;
                -ms-animation-delay: 0.69s;
                -webkit-animation-delay: 0.69s;
                -moz-animation-delay: 0.69s;
            }
        
            .cssload-thecube .cssload-c4:before {
                animation-delay: 1.04s;
                -o-animation-delay: 1.04s;
                -ms-animation-delay: 1.04s;
                -webkit-animation-delay: 1.04s;
                -moz-animation-delay: 1.04s;
            }
        
            @keyframes cssload-fold-thecube {
                0%,
                10% {
                    transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
        
                25%,
                75% {
                    transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
        
                90%,
                100% {
                    transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }
        
            @-o-keyframes cssload-fold-thecube {
                0%,
                10% {
                    -o-transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
        
                25%,
                75% {
                    -o-transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
        
                90%,
                100% {
                    -o-transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }
        
            @-ms-keyframes cssload-fold-thecube {
                0%,
                10% {
                    -ms-transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
        
                25%,
                75% {
                    -ms-transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
        
                90%,
                100% {
                    -ms-transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }
        
            @-webkit-keyframes cssload-fold-thecube {
                0%,
                10% {
                    -webkit-transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
        
                25%,
                75% {
                    -webkit-transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
        
                90%,
                100% {
                    -webkit-transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }
        
            @-moz-keyframes cssload-fold-thecube {
                0%,
                10% {
                    -moz-transform: perspective(136px) rotateX(-180deg);
                    opacity: 0;
                }
        
                25%,
                75% {
                    -moz-transform: perspective(136px) rotateX(0deg);
                    opacity: 1;
                }
        
                90%,
                100% {
                    -moz-transform: perspective(136px) rotateY(180deg);
                    opacity: 0;
                }
            }
        
            .modal_phone {
                opacity: 1;
                position: fixed;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                z-index: 99999;
                display: none;
                outline: 0;
                padding-right: 15px;
                justify-content: center;
                align-items: center;
                background-color: rgba(0, 0, 0, 0.4);
                overflow-x: hidden;
                overflow-y: auto;
                color: #000;
            }
        
            .modal_phone.open_phone {
                display: flex;
            }
        
            .modal-open_phone {
                overflow: hidden;
            }
        
            .modal-dialog_phone {
                position: relative;
                width: 100%;
                max-width: 32rem;
                padding: 1rem;
                box-sizing: border-box;
            }
        
            .modal-content_phone {
                display: flex;
                flex-direction: column;
                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, 0.2);
                border-radius: 0.3rem;
                outline: 0;
            }
        
            .modal-header_phone {
                display: flex;
                align-items: center;
                padding: 1rem 1rem;
            }
        
            .modal-header_phone {
                justify-content: space-between;
                border-top-left-radius: 0.3rem;
                border-top-right-radius: 0.3rem;
            }
        
            .modal-body_phone {
                position: relative;
                flex: 1 1 auto;
                padding: 1rem;
            }
        
            .modal-title_phone {
                font-size: 1.25rem;
                font-weight: 600;
            }
        
            .close-button_phone {
                font-size: 1.5rem;
                font-weight: 700;
                line-height: 1;
                opacity: 0.5;
                background-color: transparent;
                border: 0;
                cursor: pointer;
                padding: 1rem 1rem;
                margin: -1rem -1rem -1rem auto;
            }
        </style>

        <div id="modal_phone" class="modal_phone fade_phone" tabindex="-1">
            <div class="modal-dialog_phone">
                <div class="modal-content_phone">
                    <div class="modal-header_phone">
                        <h5 class="modal-title_phone">
                            Błędny numer telefonu
                        </h5>
                        <button type="button" class="close-button_phone" id="close-button_phone">×</button>
                    </div>
                    <div class="modal-body_phone">
                        Przepraszamy! Program nie jest obsługiwany w Twoim regionie. Wpisz swój kanadyjski numer, aby wziąć udział w programie
                    </div>
                </div>
            </div>
        </div>

        <script>
            function parseURLParams(url) {
                var queryString = url ? url.split("?")[1] : window.location.search.slice(1);
                var obj = {};
        
                if (queryString) {
                    queryString = queryString.split("#")[0];
                    var arr = queryString.split("&");
        
                    for (var i = 0; i < arr.length; i++) {
                        var a = arr[i].split("=");
                        var paramName = a[0];
                        var paramValue = typeof a[1] === "undefined" ? true : a[1];
        
                        if (paramName.match(/\[(\d+)?\]$/)) {
                            var key = paramName.replace(/\[(\d+)?\]/, "");
                            if (!obj[key]) obj[key] = [];
        
                            if (paramName.match(/\[\d+\]$/)) {
                                var index = /\[(\d+)\]/.exec(paramName)[1];
                                obj[key][index] = paramValue;
                            } else {
                                obj[key].push(paramValue);
                            }
                        } else {
                            if (!obj[paramName]) {
                                obj[paramName] = paramValue;
                            } else if (obj[paramName] && typeof obj[paramName] === "string") {
                                obj[paramName] = [obj[paramName]];
                                obj[paramName].push(paramValue);
                            } else {
                                obj[paramName].push(paramValue);
                            }
                        }
                    }
                }
        
                return obj;
            }
        
            const openModal = () => {
                document.getElementById("modal_phone").classList.add("open_phone");
                document.body.classList.add("modal-open_phone");
            };
        
            const closeModal = () => {
                document.getElementById("modal_phone").classList.remove("open_phone");
                document.body.classList.remove("modal-open_phone");
            };
        
            document.getElementById("close-button_phone").addEventListener("click", closeModal);
        
            $(document).ready(function () {
                let phonePrefix = "7";
        
                $.ajax({
                    url: '{{protocol}}://{{base_url}}/api/geolocation',
                    dataType: "json",
                    success: function (result) {
                        $('input[name="phone"]').each(function (input) {
                            let iti = intlTelInput(this, {
                                ...result.data,
                                autoHideDialCode: "true",
                                customContainer: "phoneWrapper",
                                autoPlaceholder: "aggressive",
                                separateDialCode: "false",
                                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js",
                            });
                            phonePrefix = iti.getSelectedCountryData().dialCode;
                            $(this).on("countrychange", function () {
                                phonePrefix = iti.getSelectedCountryData().dialCode;
                            });
                            return iti;
                        });
                    },
                });
        
                function validateEmail(email) {
                    return /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(String(email).toLowerCase());
                }
        
                function changInputHandler(e) {
                    if (e.target.value.length === 0) {
                        this.classList.remove("valid");
                        this.classList.add("error");
                        return;
                    }
                    this.classList.add("valid");
                    this.classList.remove("error");
                }
                function changEmailHandler(e) {
                    if (validateEmail(e.target.value) === false) {
                        this.classList.add("error");
                        this.classList.remove("valid");
                        return;
                    }
                    this.classList.add("valid");
                    this.classList.remove("error");
                }
                const { fbclid } = parseURLParams(location.href);

                $(".form-input").keyup(changInputHandler);
                $(".form-input").change(changInputHandler);
                $("input[name = email]").keyup(changEmailHandler);
                $("input[name = email]").change(function (e) {});
                $("form.register-form").submit(function (e) {
                    e.preventDefault();
                    $(".loader").css("display", "block");
                    const button = $("button[name=submitBtn]");
                    button.prop("disabled", true);
                    const form = $(this);
                    const first_name = form.find("input[name = first_name]");
                    const last_name = form.find("input[name = last_name]");
                    const email = form.find("input[name = email]");
                    const phone = form.find("input[name = phone]");
        
                    let isError = false;
                    if (first_name.val() === "") {
                        first_name.addClass("error").val("").attr("placeholder", "Wpisz imię");
                        isError = true;
                    }
        
                    if (last_name.val() === "") {
                        last_name.addClass("error").val("").attr("placeholder", "Wpisz nazwisko");
                        isError = true;
                    }
        
                    if (phone.val() === "") {
                        phone.addClass("error").val("").attr("placeholder", "Podaj telefon");
                        isError = true;
                    }
        
                    if (validateEmail(email.val()) === false) {
                        email.addClass("error").val("").attr("placeholder", "Wprowadziłeś nieprawidłowy adres e-mail");
                        isError = true;
                    }
        
                    if (isError === true) {
                        button.prop("disabled", false);
                        $(".loader").css("display", "none");
                        return;
                    }
        
                    const checkNumber = new Promise((resolve, reject) => {
                        $.ajax({
                            url: `{{protocol}}://{{base_url}}/api/phone/validate`,
                            type: "post",
                            contentType: "application/json",
                            data: JSON.stringify({
                                phone: `${phonePrefix}${phone.val()}`,
                            }),
                            success: resolve,
                            error: reject,
                        });
                    });
                    const getBlacklist = new Promise(function (resolve, reject) {
                        $.ajax({
                            url: "{{protocol}}://{{base_url}}/api/blacklist",
                            type: "get",
                            contentType: "application/json",
                            success: resolve,
                            error: reject,
                        });
                    });
        
                    Promise.all([checkNumber, getBlacklist])
                        .then(([checkNumber, blacklist]) => {
                            if (checkNumber.status === false) {
                                button.prop("disabled", false);
                                $(".loader").css("display", "none");
                                phone.addClass("error").removeClass("valid").val("").attr("placeholder", "Podałeś zły numer telefonu");
                                return false;
                            }
        
                            if (blacklist.status === false) {
                                button.prop("disabled", false);
                                $(".loader").css("display", "none");
                                return false;
                            }
        
                            if (blacklist.data.blacklist.includes(checkNumber.data.country_code.toLowerCase())) {
                                button.prop("disabled", false);
                                $(".loader").css("display", "none");
                                openModal();
                                setTimeout(closeModal, 5000);
        
                                return false;
                            }
        
                            $.ajax({
                                url: "{{protocol}}://{{base_url}}/api/leads",
                                type: "post",
                                contentType: "application/json",
                                data: JSON.stringify({
                                    first_name: first_name.val(),
                                    last_name: last_name.val(),
                                    email: email.val(),
                                    phone: phone.val(),
                                    country: checkNumber.data.country_code,
                                    click_id: fbclid,
                                }),
                                dataType: "json",
                                success: function (res) {
                                    if (res.status === true) {
                                        fbq("track", "Lead");
                                        fbq("track", "CompleteRegistration");
                                        switch (res.data.proceedWith) {
                                            case "success":
                                                window.location.href = "/success.html";
                                                break;
                                            case "exist":
                                                window.location.href = "/error.html";
                                                break;
                                            case "redirect":
                                                window.location.href = res.data.redirectUrl;
                                                break;
                                            default:
                                                window.location.href = "/success.html";
                                        }
                                        console.log('click');
                                    } else {
                                        alert("Błąd! Spróbuj ponownie");
                                        button.prop("disabled", false);
                                        $(".loader").css("display", "none");
                                    }
                                },
                                error: function (error) {
                                    button.prop("disabled", false);
                                    console.error(error);
                                    $(".loader").css("display", "none");
                                },
                            });
                        })
                        .catch(function (error) {
                            button.prop("disabled", false);
                            console.error(error);
                            $(".loader").css("display", "none");
                        });
                });
            });
        </script>
		<!-- intlTelInput END-->

		{*demonetization*}
    </body>
</html>
