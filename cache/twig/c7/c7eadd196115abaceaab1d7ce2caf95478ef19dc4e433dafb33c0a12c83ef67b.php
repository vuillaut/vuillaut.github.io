<?php

/* modular/resume.html.twig */
class __TwigTemplate_6506018fb61a03df5df3ab46cb4ac7b8878d58decb804b34544dc9890058ecad extends Twig_Template
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
        echo "<section id=\"resume\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sections", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 3
            echo "    <div class=\"row ";
            echo $this->getAttribute($context["section"], "css_class", array());
            echo "\">
        <div class=\"three columns header-col\">
            <h1><span>";
            // line 5
            echo $this->getAttribute($context["section"], "title", array());
            echo "</span></h1>
        </div>
        <div class=\"nine columns main-col\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "            <div class=\"row item\">
                <div class=\"twelve columns\">
                    ";
                // line 11
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 12
                    echo "                    <h3>";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h3>
                    ";
                }
                // line 14
                echo "                    ";
                if (($this->getAttribute($context["item"], "info", array()) || $this->getAttribute($context["item"], "date", array()))) {
                    // line 15
                    echo "                    <p class=\"info\">";
                    echo $this->getAttribute($context["item"], "info", array());
                    echo " <span>&bull;</span> <em class=\"date\">";
                    echo $this->getAttribute($context["item"], "date", array());
                    echo "</em></p>
                    ";
                }
                // line 17
                echo "                    <p>
                        ";
                // line 18
                echo $this->getAttribute($context["item"], "description", array());
                echo "
                    </p>

                    ";
                // line 21
                if ($this->getAttribute($context["item"], "skills", array())) {
                    // line 22
                    echo "                    <div class=\"bars\">
                        <ul class=\"skills\">
                            ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "skills", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                        // line 25
                        echo "                            <li><span class=\"bar-expand\" style=\"width: ";
                        echo $this->getAttribute($context["skill"], "level", array());
                        echo "%;animation: ";
                        echo twig_lower_filter($this->env, $this->getAttribute($context["skill"], "name", array()));
                        echo " 2s ease;\"></span><em>";
                        echo $this->getAttribute($context["skill"], "name", array());
                        echo "</em></li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                        </ul>
                    </div>
                    ";
                }
                // line 30
                echo "
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "modular/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  111 => 34,  102 => 30,  97 => 27,  84 => 25,  80 => 24,  76 => 22,  74 => 21,  68 => 18,  65 => 17,  57 => 15,  54 => 14,  48 => 12,  46 => 11,  42 => 9,  38 => 8,  32 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"resume\">
    {% for section in page.header.sections %}
    <div class=\"row {{ section.css_class }}\">
        <div class=\"three columns header-col\">
            <h1><span>{{ section.title }}</span></h1>
        </div>
        <div class=\"nine columns main-col\">
            {% for item in section.items %}
            <div class=\"row item\">
                <div class=\"twelve columns\">
                    {% if item.title %}
                    <h3>{{ item.title }}</h3>
                    {% endif %}
                    {% if item.info or item.date %}
                    <p class=\"info\">{{ item.info }} <span>&bull;</span> <em class=\"date\">{{ item.date }}</em></p>
                    {% endif %}
                    <p>
                        {{ item.description }}
                    </p>

                    {% if item.skills %}
                    <div class=\"bars\">
                        <ul class=\"skills\">
                            {% for skill in item.skills %}
                            <li><span class=\"bar-expand\" style=\"width: {{ skill.level }}%;animation: {{ skill.name|lower }} 2s ease;\"></span><em>{{ skill.name }}</em></li>
                            {% endfor %}
                        </ul>
                    </div>
                    {% endif %}

                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endfor %}
</section>
", "modular/resume.html.twig", "/Applications/MAMP/htdocs/user/themes/ceevee/templates/modular/resume.html.twig");
    }
}
