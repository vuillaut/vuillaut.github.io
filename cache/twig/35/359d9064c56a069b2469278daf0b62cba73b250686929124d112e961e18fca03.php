<?php

/* partials/header.html.twig */
class __TwigTemplate_4711e650e790d5bd3c3318a77c458e7ce0b57a0b26fdc394a494129aeab791d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"home\">
  ";
        // line 2
        $this->displayBlock('navigation', $context, $blocks);
        // line 5
        echo "  <div class=\"row banner\">
    <div class=\"banner-text\">
      <h1 class=\"responsive-headline\">";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", array()), "title", array());
        echo "</h1>
      <h3>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", array()), "description", array());
        echo "</h3>
      <hr />
      ";
        // line 10
        if ($this->getAttribute(($context["site"] ?? null), "social", array())) {
            // line 11
            echo "      <ul class=\"social\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\"><i class=\"fa fa-";
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></i></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
      ";
        }
        // line 17
        echo "    </div>
  </div>
  <p class=\"scrolldown\">
    <a class=\"smoothscroll\" href=\"#about\"><i class=\"icon-down-circle\"></i></a>
  </p>
</header>
";
    }

    // line 2
    public function block_navigation($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 3)->display($context);
        // line 4
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 4,  75 => 3,  72 => 2,  62 => 17,  58 => 15,  47 => 13,  43 => 12,  40 => 11,  38 => 10,  33 => 8,  29 => 7,  25 => 5,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"home\">
  {% block navigation %}
  {% include 'partials/navigation.html.twig' %}
  {% endblock %}
  <div class=\"row banner\">
    <div class=\"banner-text\">
      <h1 class=\"responsive-headline\">{{ site.header.title }}</h1>
      <h3>{{ site.header.description }}</h3>
      <hr />
      {% if site.social %}
      <ul class=\"social\">
        {% for item in site.social %}
        <li><a href=\"{{ item.url }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a></li>
        {% endfor %}
      </ul>
      {% endif %}
    </div>
  </div>
  <p class=\"scrolldown\">
    <a class=\"smoothscroll\" href=\"#about\"><i class=\"icon-down-circle\"></i></a>
  </p>
</header>
", "partials/header.html.twig", "/Applications/MAMP/htdocs/user/themes/ceevee/templates/partials/header.html.twig");
    }
}
