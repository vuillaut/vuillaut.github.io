<?php

/* modular/about.html.twig */
class __TwigTemplate_fe7114fa0e4f3b575d0a67bcb68268d5e0779bee03cc2192df1445dfc5b4832e extends Twig_Template
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
        echo "<section id=\"about\">
    <div class=\"row\">
        <div class=\"three columns\">
            <img class=\"profile-pic\"  src=\"";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), "profilepic.jpg", array(), "array"), "url", array());
        echo "\" alt=\"\" />
        </div>

        <div class=\"nine columns main-col\">
            ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
            <div class=\"row\">
                <div class=\"columns contact-details\">
                    ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "address", array())) {
            // line 12
            echo "                    <h2>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title2", array());
            echo "</h2>
                    ";
        }
        // line 14
        echo "                    <p class=\"address\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "address", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "                        ";
            echo $this->getAttribute($context["item"], "line", array());
            echo " <br />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "email", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                        ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->safeEmailFilter($this->getAttribute($context["item"], "address", array()));
            echo " <br />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </p>
                </div>
                ";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array())) {
            // line 24
            echo "                <div class=\"columns download\">
                    <p>
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 27
                echo "                            <a href=\"";
                echo $this->getAttribute($context["button"], "url", array());
                echo "\" class=\"button\"><i class=\"fa fa-";
                echo $this->getAttribute($context["button"], "icon", array());
                echo "\"></i>";
                echo $this->getAttribute($context["button"], "text", array());
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </p>
                </div>
                ";
        }
        // line 32
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  102 => 29,  89 => 27,  85 => 26,  81 => 24,  79 => 23,  75 => 21,  66 => 19,  61 => 18,  52 => 16,  48 => 15,  45 => 14,  39 => 12,  37 => 11,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"about\">
    <div class=\"row\">
        <div class=\"three columns\">
            <img class=\"profile-pic\"  src=\"{{ page.media.images['profilepic.jpg'].url }}\" alt=\"\" />
        </div>

        <div class=\"nine columns main-col\">
            {{ page.content }}
            <div class=\"row\">
                <div class=\"columns contact-details\">
                    {% if page.header.address %}
                    <h2>{{ page.header.title2 }}</h2>
                    {% endif %}
                    <p class=\"address\">
                        {% for item in page.header.address %}
                        {{ item.line }} <br />
                        {% endfor %}
                        {% for item in page.header.email %}
                        {{ item.address|safe_email }} <br />
                        {% endfor %}
                    </p>
                </div>
                {% if page.header.buttons %}
                <div class=\"columns download\">
                    <p>
                        {% for button in page.header.buttons %}
                            <a href=\"{{ button.url }}\" class=\"button\"><i class=\"fa fa-{{ button.icon }}\"></i>{{ button.text }}</a>
                        {% endfor %}
                    </p>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</section>
", "modular/about.html.twig", "/Applications/MAMP/htdocs/user/themes/ceevee/templates/modular/about.html.twig");
    }
}
