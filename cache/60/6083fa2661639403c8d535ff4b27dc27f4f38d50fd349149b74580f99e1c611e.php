<?php

/* layout.html */
class __TwigTemplate_c572d4d22046f7f176c32af9297b037e5f20f209b6cdf872829731198b22360f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t<title>layout.html</title>
</head>
<body>
\t<header>header</header>

\t<content>
\t\t";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "\t</content>

\t<footer>footer</footer>
</body>
</html>";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  40 => 9,  32 => 12,  30 => 9,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
\t<title>layout.html</title>
</head>
<body>
\t<header>header</header>

\t<content>
\t\t{% block content %}

\t\t{% endblock %}
\t</content>

\t<footer>footer</footer>
</body>
</html>", "layout.html", "/usr/local/var/www/test/imoockj/app/views/layout.html");
    }
}
