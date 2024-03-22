<?php
    session_start();

    $_SESSION = [];

    if (ini_get("session.use_cookies")) { //セッション内部でcookieが使われてるか確認
        $params = session_get_cookie_params(); // いくつかパラメータが入ってて、後で取り出しやすいようにわかりやすい変数に代入
        setcookie(session_name(), '', time() - 42000, // レスポンスにsetcookieヘッダが追加される
        // 引数1→クッキーの中で使うキーの名前
        // 引数2→キーの値（）空にした
        // 引数3→現在の時間を取得して、そこから42000を引くことによって過去の日付になる
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]);
    }

    session_destroy();
    header("Location: login.html");