<?php

/* twig.html */
class __TwigTemplate_d73a4d8dbfd897d47e116b20d6d53f77b6fac813a6655ff5907110d14ff7169b extends Twig_Template
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
        echo "<h1>这里是视图文件</h1>
<h3>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>这里是视图文件</h1>
<h3>{{ data }}</h3>
", "twig.html", "/usr/local/var/www/test/imoockj/app/views/twig.html");
    }
}
