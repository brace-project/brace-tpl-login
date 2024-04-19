<?php

namespace Brace\Tpl\Login;

class LoginPage
{


    public function __construct(
        private string $title = "Login",
        private string $logoImage = "",

        /**
         * Css starting with :root { ... }
         *
         * @var string
         */
        private string $styleCss = "",
        private string $actionUrl = "",
        private string $csrfToken = ""
    )
    {
    }

    public function getLoginHtml(string $errorMsg = null) : string
    {
        return phore_template_file(__DIR__ . "/tpl/login/loginV1.html")->render([
            "js" => phore_file(__DIR__ . "/tpl/_build/loginV1.js")->get_contents(),
            "title" => $this->title,
            "logoImage" => $this->logoImage,
            "styleCss" => $this->styleCss,
            "actionUrl" => $this->actionUrl,
            "csrfToken" => $this->csrfToken,
            "errorMsg" => $errorMsg
        ]);
    }


    public function getLogoutHtml()
    {
    }

    public function getResendPasswordHtml()
    {
    }



}
