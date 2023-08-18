import "./bootstrap";

import { Toast } from "bootstrap/dist/js/bootstrap.bundle";
document.addEventListener("DOMContentLoaded", function () {
    var toast = new Toast(document.getElementById("liveToast"));
    toast.show();
});
