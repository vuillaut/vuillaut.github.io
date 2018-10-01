<?php

/* partials/base.html.twig */
class __TwigTemplate_10ed116c881dd3961a0b6ea53d5651429d09dbeea9db5819dd7a05e7295a5cff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
         ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
        <script src=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/modernizr.js");
        echo "\"></script>
        ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/default.css"), "method");
        // line 14
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/layout.css"), "method");
        // line 15
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/media-queries.css"), "method");
        // line 16
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/magnific-popup.css"), "method");
        // line 17
        echo "        ";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 24)->display($context);
        // line 25
        echo "        ";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "        ";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 30)->display($context);
        // line 31
        echo "        ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 34
        echo "            <script>window.jQuery || document.write('<script src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/jquery-1.10.2.min.js");
        echo "\"><\\/script>')</script>
            <script type=\"text/javascript\" src=\"";
        // line 35
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/jquery-migrate-1.2.1.min.js");
        echo "\"></script>
            ";
        // line 36
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.flexslider.js"), "method");
        // line 37
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/waypoints.js"), "method");
        // line 38
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.fittext.js"), "method");
        // line 39
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/magnific-popup.js"), "method");
        // line 40
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/init.js"), "method");
        // line 41
        echo "            ";
        $this->loadTemplate("partials/twFetcher.html.twig", "partials/base.html.twig", 41)->display($context);
        // line 42
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 42,  187 => 41,  184 => 40,  181 => 39,  178 => 38,  175 => 37,  173 => 36,  169 => 35,  164 => 34,  161 => 33,  158 => 32,  154 => 31,  151 => 30,  148 => 29,  143 => 27,  139 => 28,  136 => 27,  133 => 26,  129 => 25,  126 => 24,  123 => 23,  119 => 17,  116 => 16,  113 => 15,  110 => 14,  107 => 13,  104 => 12,  98 => 19,  93 => 18,  91 => 12,  87 => 11,  84 => 10,  82 => 9,  74 => 8,  71 => 7,  68 => 6,  59 => 43,  56 => 32,  53 => 29,  50 => 26,  48 => 23,  44 => 21,  42 => 6,  37 => 4,  33 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
         {% block stylesheets %}
                {% do assets.addCss('theme://css/default.css') %}
                {% do assets.addCss('theme://css/layout.css') %}
                {% do assets.addCss('theme://css/media-queries.css') %}
                {% do assets.addCss('theme://css/magnific-popup.css') %}
        {% endblock %}
        {{ assets.css() }}
        <script src=\"{{ url('theme://js/modernizr.js') }}\"></script>
        {% endblock head%}
    </head>
    <body>
        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}
        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}
        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}
        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            <script>window.jQuery || document.write('<script src=\"{{ url('theme://js/jquery-1.10.2.min.js') }}\"><\\/script>')</script>
            <script type=\"text/javascript\" src=\"{{ url('theme://js/jquery-migrate-1.2.1.min.js') }}\"></script>
            {% do assets.addJs('theme://js/jquery.flexslider.js') %}
            {% do assets.addJs('theme://js/waypoints.js') %}
            {% do assets.addJs('theme://js/jquery.fittext.js') %}
            {% do assets.addJs('theme://js/magnific-popup.js') %}
            {% do assets.addJs('theme://js/init.js') %}
            {% include 'partials/twFetcher.html.twig' %}
        {% endblock %}
        {{ assets.js() }}
    </body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/user/themes/ceevee/templates/partials/base.html.twig");
    }
}
