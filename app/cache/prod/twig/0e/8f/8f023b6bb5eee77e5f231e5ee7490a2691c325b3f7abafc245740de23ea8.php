<?php

/* FSNBotBundle:Default:index.html.twig */
class __TwigTemplate_0e8f8f023b6bb5eee77e5f231e5ee7490a2691c325b3f7abafc245740de23ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <style>
        .bouncing-boat {
            margin-left: 0;
            cursor: pointer;
            -webkit-transition: margin-left 1s ease-in-out;
            -moz-transition: margin-left 1s ease-in-out;
            -o-transition: margin-left 1s ease-in-out;
            -ms-transition: margin-left 1s ease-in-out;
        }

        /* переворот картинки через CSS */
        .flip-horizontal {
            -webkit-transform: scaleX(-1);
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            -ms-transform: scaleX(-1);
            filter: fliph; /* IE<10 */
        }

    </style>
</head>
<body>

<script>
    function bounceBoat(elem) {

  //      elem.onclick = null; // следующий клик не испортит анимацию

        function go() {
            var marginLeft = parseInt(elem.style.marginLeft) || 0;

            if (marginLeft == 0) {
                elem.className = 'bouncing-boat';
            } else {
                elem.className = 'bouncing-boat flip-horizontal';
            }

            elem.style.marginLeft = (marginLeft ? 0 : 300) + 'px';

        }

        go();

        elem.addEventListener('transitionend', go, false); /* на будущее */
        elem.addEventListener('webkitTransitionEnd', go, false);
        elem.addEventListener('mozTransitionEnd', go, false);
        elem.addEventListener('oTransitionEnd', go, false);
        elem.addEventListener('msTransitionEnd', go, false);
    }
</script>
    <h1 align=\"center\">Welcome to FSN!!!</h1>
<br><br>
";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "    <div align = \"center\">
        <form action='films' method=\"post\">
        <img src=\"http://img3.wikia.nocookie.net/__cb20130614090906/spice-and-wolf/ru/images/thumb/6/6b/Horochibi.png/205px-Horochibi.png\" class=\"bouncing-boat\" >
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            <button onclick=\"bounceBoat(document.getElementsByTagName('img')[0])\">Gooooooooo!</button>
        </form>
    </div>
";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FSNBotBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 68,  118 => 63,  113 => 60,  110 => 59,  105 => 6,  99 => 5,  93 => 69,  91 => 68,  89 => 59,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
