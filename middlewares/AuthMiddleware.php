<?php

class AuthMiddleware {
    public function handle() {
        if (empty($_SESSION) || !isset($_SESSION['id'])) {
            header("Location: /admin"); // redirect to login
            exit;
        }
    }
}
?>