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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <h1 align=\"center\">Welcome to FSN!!!</h1>
<br><br>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
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

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <div align = \"center\">
    <img src=\"https://s-media-cache-ak0.pinimg.com/236x/5f/ca/87/5fca8757ca3b1c49e212a129326bcf2b.jpg\" alt=\"Mountain View\" style=\"width:250px;height:250px\">
        ";
        // line 16
        echo "        <form action='films' method=\"post\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </form>
    </div>
";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FSNBotBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  75 => 17,  72 => 16,  68 => 13,  65 => 12,  60 => 6,  54 => 5,  48 => 22,  46 => 21,  44 => 12,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
