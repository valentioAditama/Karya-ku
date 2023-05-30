<script>
    function showPassword() {
        var buttonPassword = document.getElementById("password");
        var buttonPasswordConfirm = document.getElementById("password_confirm");
        if (buttonPassword.type == "password") {
            buttonPassword.type = "text";
            buttonPasswordConfirm.type = "text";
        } else {
            buttonPassword.type = "password";
            buttonPasswordConfirm.type = "password";
        }
    }
</script>