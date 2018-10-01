<?php

/* modular/testimonials.html.twig */
class __TwigTemplate_2f60132f0df783cedadfc8eefe4ed1ac03ba828f07e363ee1b4e4c0e19c58a8f extends Twig_Template
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
        echo "<section id=\"testimonials\">
    <div class=\"text-container\">
        <div class=\"row\">
            <div class=\"two columns header-col\">
                <h1><span>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</span></h1>
            </div>
            ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
            <div class=\"ten columns flex-container\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "testimonials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "                        <li>
                            <blockquote>
                                <p>";
            // line 14
            echo $this->getAttribute($context["item"], "content", array());
            echo "</p>
                                <cite>";
            // line 15
            echo $this->getAttribute($context["item"], "author", array());
            echo "</cite>
                            </blockquote>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  49 => 15,  45 => 14,  41 => 12,  37 => 11,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"testimonials\">
    <div class=\"text-container\">
        <div class=\"row\">
            <div class=\"two columns header-col\">
                <h1><span>{{ page.header.title }}</span></h1>
            </div>
            {{ page.content }}
            <div class=\"ten columns flex-container\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        {% for item in page.header.testimonials %}
                        <li>
                            <blockquote>
                                <p>{{ item.content }}</p>
                                <cite>{{ item.author }}</cite>
                            </blockquote>
                        </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
", "modular/testimonials.html.twig", "/Applications/MAMP/htdocs/user/themes/ceevee/templates/modular/testimonials.html.twig");
    }
}
