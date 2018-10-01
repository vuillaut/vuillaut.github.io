<?php

/* partials/footer.html.twig */
class __TwigTemplate_f21dd1fff5223dc0593a8e16b115c61023e7619310d1256f75dba98b474fd0c9 extends Twig_Template
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
        echo "<footer>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <ul class=\"social-links\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i></a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </ul>
            <ul class=\"copyright\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "copyright", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <li>";
            echo $this->getAttribute($context["item"], "line", array());
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
        <div id=\"go-top\"><a class=\"smoothscroll\" title=\"Back to Top\" href=\"#home\"><i class=\"icon-up-open\"></i></a></div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  48 => 11,  44 => 10,  40 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <ul class=\"social-links\">
                {% for item in site.social %}
                <li><a href=\"{{ item.url }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a></li>
                {% endfor %}
            </ul>
            <ul class=\"copyright\">
                {% for item in site.copyright %}
                <li>{{ item.line }}</li>
                {% endfor %}
            </ul>
        </div>
        <div id=\"go-top\"><a class=\"smoothscroll\" title=\"Back to Top\" href=\"#home\"><i class=\"icon-up-open\"></i></a></div>
    </div>
</footer>
", "partials/footer.html.twig", "/Applications/MAMP/htdocs/user/themes/ceevee/templates/partials/footer.html.twig");
    }
}
