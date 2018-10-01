<?php

/* forms/default/form.html.twig */
class __TwigTemplate_1ba3066d89ff09c72390701ef69df0aa38ec647763c7f53e49fa287b7b924704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", array())), "POST");
        // line 10
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", array()))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array()), true)) : (true))));
        // line 11
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", array()))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "inline_errors", array(0 => false), "method")));
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 14
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 15
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
        // line 19
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", array()))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", array())) . $this->getAttribute(($context["uri"] ?? null), "params", array()))));
        // line 20
        echo "
";
        // line 21
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 22
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 24
        echo "
";
        // line 25
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", array())) {
            // line 26
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/form.vendor.js", 1 => array("loading" => "defer", "group" => "bottom")), "method");
            // line 27
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/form.min.js", 1 => array("loading" => "defer", "group" => "bottom")), "method");
        }
        // line 29
        echo "
    ";
        // line 30
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", array(0 => (((((((((("
        window.GravForm = window.GravForm || {};
        window.GravForm.config = {
            current_url: '" . $this->getAttribute(        // line 33
($context["uri"] ?? null), "route", array(0 => true), "method")) . "',
            base_url_relative: '") .         // line 34
($context["base_url_relative"] ?? null)) . "',
            param_sep: '") . $this->getAttribute($this->getAttribute(        // line 35
($context["config"] ?? null), "system", array()), "param_sep", array())) . "',
            form_nonce: '") . $this->getAttribute(        // line 36
($context["form"] ?? null), "getNonce", array())) . "',
            session_timeout: ") . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 37
($context["config"] ?? null), "system", array()), "session", array()), "timeout", array())) . "
        };
        window.GravForm.translations = jQuery.extend({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
    "), 1 => array("group" => "bottom")), "method");
        // line 41
        echo "<form name=\"";
        echo $this->getAttribute(($context["form"] ?? null), "name", array());
        echo "\"
      action=\"";
        // line 42
        echo twig_trim_filter(($context["action"] ?? null), "/", "right");
        echo "\"
      method=\"";
        // line 43
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
      ";
        // line 44
        if ($this->getAttribute(($context["form"] ?? null), "id", array())) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", array());
            echo "\"";
        }
        // line 45
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 48
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", array())) {
            echo "novalidate";
        }
        // line 49
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", array())) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 50
        echo ">

  ";
        // line 52
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 53
        echo "
  ";
        // line 54
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", array())));
        // line 55
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 56
            echo "    ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 57
            echo "    ";
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 57)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 58
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
  ";
        // line 60
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 60)->display($context);
        // line 61
        echo "
  ";
        // line 62
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 63
        echo "
  ";
        // line 64
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 67
        echo "
  ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 69
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "<div class=\" ";
                echo $this->getAttribute($context["button"], "outerclasses", array());
                echo "\">";
            }
            // line 70
            echo "          ";
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 71
                echo "              <a href=\"";
                echo (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "http") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) ? ($this->getAttribute($context["button"], "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", array()))));
                echo "\">
          ";
            }
            // line 73
            echo "          <button
                ";
            // line 74
            if ($this->getAttribute($context["button"], "id", array())) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", array());
                echo "\"";
            }
            // line 75
            echo "                ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 78
            echo "                ";
            if ($this->getAttribute($context["button"], "disabled", array())) {
                echo "disabled=\"disabled\"";
            }
            // line 79
            echo "
                type=\"";
            // line 80
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"

                ";
            // line 82
            if ($this->getAttribute($context["button"], "task", array())) {
                // line 83
                echo "                    name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", array());
                echo "\"
                ";
            }
            // line 85
            echo "            >
                ";
            // line 86
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
          </button>
          ";
            // line 88
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 89
                echo "              </a>
          ";
            }
            // line 91
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "</div>";
            }
            // line 92
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
  ";
        // line 94
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 97
        echo "
  ";
        // line 98
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 98)->display($context);
        // line 99
        echo "  ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>

";
        // line 102
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "forms", array()), "dropzone", array()), "enabled", array())) {
            // line 103
            echo "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 104
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 104)->display($context);
            // line 105
            echo "</div>
";
        }
    }

    // line 45
    public function block_form_classes($context, array $blocks = array())
    {
        // line 46
        echo "      class=\"";
        echo ($context["form_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["form"] ?? null), "classes", array());
        echo "\"
      ";
    }

    // line 52
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 62
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 64
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 65
        echo "  <div class=\"";
        echo ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("buttons"));
        echo "\">
  ";
    }

    // line 75
    public function block_button_classes($context, array $blocks = array())
    {
        // line 76
        echo "                class=\"";
        echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button"));
        echo " ";
        echo $this->getAttribute(($context["button"] ?? null), "classes", array());
        echo "\"
                ";
    }

    // line 94
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 95
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 95,  394 => 94,  385 => 76,  382 => 75,  375 => 65,  372 => 64,  367 => 62,  362 => 52,  353 => 46,  350 => 45,  344 => 105,  342 => 104,  339 => 103,  337 => 102,  330 => 99,  328 => 98,  325 => 97,  323 => 94,  320 => 93,  306 => 92,  301 => 91,  297 => 89,  295 => 88,  290 => 86,  287 => 85,  281 => 83,  279 => 82,  274 => 80,  271 => 79,  266 => 78,  263 => 75,  257 => 74,  254 => 73,  248 => 71,  245 => 70,  238 => 69,  221 => 68,  218 => 67,  216 => 64,  213 => 63,  211 => 62,  208 => 61,  206 => 60,  203 => 59,  189 => 58,  181 => 57,  178 => 56,  160 => 55,  158 => 54,  155 => 53,  153 => 52,  149 => 50,  144 => 49,  139 => 48,  136 => 45,  130 => 44,  124 => 43,  120 => 42,  115 => 41,  110 => 37,  108 => 36,  106 => 35,  104 => 34,  102 => 33,  98 => 30,  95 => 29,  91 => 27,  88 => 26,  86 => 25,  83 => 24,  79 => 22,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  62 => 16,  59 => 15,  56 => 14,  52 => 13,  49 => 12,  47 => 11,  45 => 10,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route ~ uri.params %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

{% if form.keep_alive %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'loading': 'defer', 'group': 'bottom' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'loading': 'defer', 'group': 'bottom' }) %}
{% endif %}

    {% do assets.addInlineJs(\"
        window.GravForm = window.GravForm || {};
        window.GravForm.config = {
            current_url: '\" ~ uri.route(true) ~\"',
            base_url_relative: '\" ~ base_url_relative ~ \"',
            param_sep: '\"~ config.system.param_sep ~ \"',
            form_nonce: '\" ~ form.getNonce ~ \"',
            session_timeout: \" ~ config.system.session.timeout ~ \"
        };
        window.GravForm.translations = jQuery.extend({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
    \", { 'group': 'bottom' }) %}
<form name=\"{{ form.name }}\"
      action=\"{{ action | trim('/', 'right') }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      class=\"{{ form_outer_classes }} {{ form.classes }}\"
      {% endblock %}
      {% if form.novalidate %}novalidate{% endif %}
      {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  {% set data = data ?? form.data %}
  {% for field in form.fields %}
    {% set value = form.value(field.name) %}
    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
  {% endfor %}

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}

  {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\" {{ button.outerclasses }}\">{% endif %}
          {% if button.url %}
              <a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\">
          {% endif %}
          <button
                {% if button.id %}id=\"{{ button.id }}\"{% endif %}
                {% block button_classes %}
                class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
                {% endblock %}
                {% if button.disabled %}disabled=\"disabled\"{% endif %}

                type=\"{{ button.type|default('submit') }}\"

                {% if button.task %}
                    name=\"task\" value=\"{{ button.task }}\"
                {% endif %}
            >
                {{ button.value|t|default('Submit') }}
          </button>
          {% if button.url %}
              </a>
          {% endif %}
      {% if button.outerclasses is defined %}</div>{% endif %}
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
  {{ nonce_field('form', 'form-nonce')|raw }}
</form>

{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "/Applications/MAMP/htdocs/user/plugins/form/templates/forms/default/form.html.twig");
    }
}
