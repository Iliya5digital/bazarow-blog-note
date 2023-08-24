<button id="open_tg_chat">Открыть Telegram </button>
<button id="open_wa_chat">Открыть WhatsApp </button>

<script>
    document.addEventListener("deviceready", onDeviceReady, false);

    function onDeviceReady() {

        // Telegram ======================================================
        document.getElementById("open_tg_chat").onclick = function () {
            function openTelegramChat(username) {
                var url = "tg://resolve?domain=" + username;
                var target = "_system";
                var options = "location=yes";
                window.open(url, target, options);
            }
            openTelegramChat("ВАШ_ФААКАУНТ_В_ТЕЛЕГЕ");
        }

        // Whatsapp ======================================================
        var devicePlatform = device.platform;
        if (devicePlatform === 'Android') {
            document.getElementById("open_wa_chat").onclick = function () {
                function sendWhatsAppMessage(number, message) {
                    window.location.href = "whatsapp://send?phone=" + number + "&text=" + message;
                }
                sendWhatsAppMessage("+7911_ВАШ_НОМЕР");  // Замените на нужный номер телефона
            }
        } else {
            document.getElementById("open_wa_chat").onclick = function () {
                function sendWhatsAppMessage(number, message) {
                    window.location.href = "whatsapp://send?abid=" + number + "&text=" + message;
                }
                sendWhatsAppMessage("+7911_ВАШ_НОМЕР");  // Замените на нужный номер телефона
            }
        }

    }
</script>
