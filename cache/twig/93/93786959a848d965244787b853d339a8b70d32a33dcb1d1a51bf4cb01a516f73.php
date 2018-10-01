<?php

/* modular/portfolio.html.twig */
class __TwigTemplate_6706850f00c71951558d926d681351f6274ff1b719b0253746ea7d8ee83e159f extends Twig_Template
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
        echo "<section id=\"portfolio\">
    <div class=\"row\">
        <div class=\"twelve columns collapsed\">
            ";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
            <div id=\"portfolio-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                <div class=\"columns portfolio-item\">
                    <div class=\"item-wrap\">
                        <a href=\"#modal-";
            // line 9
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" title=\"\">
                            ";
            // line 10
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "cropZoom", array(0 => 215, 1 => 215), "method"), "html", array(), "method");
            echo "
                            <div class=\"overlay\">
                                <div class=\"portfolio-item-meta\">
                                    <h5>";
            // line 13
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h5>
                                    <p>";
            // line 14
            echo $this->getAttribute($context["item"], "description", array());
            echo "</p>
                                </div>
                            </div>
                            <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                        </a>
                    </div>
                </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "        <div id=\"modal-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"popup-modal mfp-hide\">
            <img class=\"scale-with-grid\" src=\"";
            // line 26
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "url", array());
            echo "\" alt=\"\" />
            <div class=\"description-box\">
                <h4>";
            // line 28
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h4>
                <p>";
            // line 29
            echo $this->getAttribute($context["item"], "content", array());
            echo ".</p>
                <span class=\"categories\"><i class=\"fa fa-tag\"></i>";
            // line 30
            echo $this->getAttribute($context["item"], "tags", array());
            echo "</span>
            </div>
            <div class=\"link-box\">
                <a href=\"";
            // line 33
            echo $this->getAttribute($context["item"], "details", array());
            echo "\">Details</a>
                <a class=\"popup-modal-dismiss\">Close</a>
            </div>
        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 38,  131 => 33,  125 => 30,  121 => 29,  117 => 28,  112 => 26,  107 => 25,  90 => 24,  86 => 22,  64 => 14,  60 => 13,  54 => 10,  50 => 9,  46 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"portfolio\">
    <div class=\"row\">
        <div class=\"twelve columns collapsed\">
            {{ page.content }}
            <div id=\"portfolio-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
                {% for item in page.header.portfolio %}
                <div class=\"columns portfolio-item\">
                    <div class=\"item-wrap\">
                        <a href=\"#modal-{{ loop.index }}\" title=\"\">
                            {{ page.media[item.img].cropZoom(215, 215).html() }}
                            <div class=\"overlay\">
                                <div class=\"portfolio-item-meta\">
                                    <h5>{{ item.title }}</h5>
                                    <p>{{ item.description }}</p>
                                </div>
                            </div>
                            <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
        {% for item in page.header.portfolio %}
        <div id=\"modal-{{ loop.index }}\" class=\"popup-modal mfp-hide\">
            <img class=\"scale-with-grid\" src=\"{{ page.media[item.img].url }}\" alt=\"\" />
            <div class=\"description-box\">
                <h4>{{ item.title }}</h4>
                <p>{{ item.content }}.</p>
                <span class=\"categories\"><i class=\"fa fa-tag\"></i>{{ item.tags }}</span>
            </div>
            <div class=\"link-box\">
                <a href=\"{{ item.details }}\">Details</a>
                <a class=\"popup-modal-dismiss\">Close</a>
            </div>
        </div>
        {% endfor %}
    </div>
</section>
", "modular/portfolio.html.twig", "/Applications/MAMP/htdocs/user/themes/ceevee/templates/modular/portfolio.html.twig");
    }
}
