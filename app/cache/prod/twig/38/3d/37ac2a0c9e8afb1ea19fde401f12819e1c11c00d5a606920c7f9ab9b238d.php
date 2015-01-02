<?php

/* FSNBotBundle:Default:start.html.twig */
class __TwigTemplate_383d37ac2a0c9e8afb1ea19fde401f12819e1c11c00d5a606920c7f9ab9b238d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "!!!!!!!!!!!!!!";
    }

    public function getTemplateName()
    {
        return "FSNBotBundle:Default:start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
