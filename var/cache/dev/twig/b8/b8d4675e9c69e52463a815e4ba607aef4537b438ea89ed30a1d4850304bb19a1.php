<?php

/* SgDatatablesBundle:datatable:button.html.twig */
class __TwigTemplate_ab2af3f143a04adde77152379071ce824bb08e80ca0ed017b7ed9a3c161eff34 extends Twig_Template
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
        $__internal_827a44b4af05ff1aa7e210450917ce967c6cd13fed175dd53a09066659235b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827a44b4af05ff1aa7e210450917ce967c6cd13fed175dd53a09066659235b70->enter($__internal_827a44b4af05ff1aa7e210450917ce967c6cd13fed175dd53a09066659235b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:button.html.twig"));

        $__internal_631cc52dc22480ce349ed5d6dcdfa6caf99e19c03474ca844ba570e633e4c187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631cc52dc22480ce349ed5d6dcdfa6caf99e19c03474ca844ba570e633e4c187->enter($__internal_631cc52dc22480ce349ed5d6dcdfa6caf99e19c03474ca844ba570e633e4c187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:button.html.twig"));

        // line 1
        echo "{
    ";
        // line 2
        if (($this->getAttribute(($context["button"] ?? null), "action", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "action", array()) === null))) {
            // line 3
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["button"] ?? null), "action", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 4
                echo "            ";
                $context["vars"] = $this->getAttribute($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "action", array()), "vars", array(), "array");
                // line 5
                echo "        ";
            } else {
                // line 6
                echo "            ";
                $context["vars"] = array();
                // line 7
                echo "        ";
            }
            // line 8
            echo "        action: ";
            $this->loadTemplate($this->getAttribute($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "action", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:button.html.twig", 8)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
    ";
        }
        // line 10
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "available", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "available", array()) === null))) {
            // line 11
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["button"] ?? null), "available", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 12
                echo "            ";
                $context["vars"] = $this->getAttribute($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "available", array()), "vars", array(), "array");
                // line 13
                echo "        ";
            } else {
                // line 14
                echo "            ";
                $context["vars"] = array();
                // line 15
                echo "        ";
            }
            // line 16
            echo "        available: ";
            $this->loadTemplate($this->getAttribute($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "available", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:button.html.twig", 16)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
    ";
        }
        // line 18
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "className", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "className", array()) === null))) {
            // line 19
            echo "        className: \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "className", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 21
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "destroy", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "destroy", array()) === null))) {
            // line 22
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["button"] ?? null), "destroy", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 23
                echo "            ";
                $context["vars"] = $this->getAttribute($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "destroy", array()), "vars", array(), "array");
                // line 24
                echo "        ";
            } else {
                // line 25
                echo "            ";
                $context["vars"] = array();
                // line 26
                echo "        ";
            }
            // line 27
            echo "        destroy: ";
            $this->loadTemplate($this->getAttribute($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "destroy", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:button.html.twig", 27)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
    ";
        }
        // line 29
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "enabled", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "enabled", array()) === null))) {
            // line 30
            echo "        enabled: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "enabled", array())), "html", null, true);
            echo ",
    ";
        }
        // line 32
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "extend", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "extend", array()) === null))) {
            // line 33
            echo "        extend: \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "extend", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 35
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "init", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "init", array()) === null))) {
            // line 36
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["button"] ?? null), "init", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 37
                echo "            ";
                $context["vars"] = $this->getAttribute($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "init", array()), "vars", array(), "array");
                // line 38
                echo "        ";
            } else {
                // line 39
                echo "            ";
                $context["vars"] = array();
                // line 40
                echo "        ";
            }
            // line 41
            echo "        init: ";
            $this->loadTemplate($this->getAttribute($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "init", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:button.html.twig", 41)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ",
    ";
        }
        // line 43
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "key", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "key", array()) === null))) {
            // line 44
            echo "        key: \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "key", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 46
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "name", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "name", array()) === null))) {
            // line 47
            echo "        name: \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "name", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 49
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "namespace", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "namespace", array()) === null))) {
            // line 50
            echo "        namespace: \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "namespace", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 52
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "text", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "text", array()) === null))) {
            // line 53
            echo "        text: \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "text", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 55
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "titleAttr", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "titleAttr", array()) === null))) {
            // line 56
            echo "        titleAttr: \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "titleAttr", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 58
        echo "    ";
        if (($this->getAttribute(($context["button"] ?? null), "buttonOptions", array(), "any", true, true) &&  !($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "buttonOptions", array()) === null))) {
            // line 59
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "buttonOptions", array()));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 60
                echo "            ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ": ";
                echo twig_jsonencode_filter($context["option"]);
                echo ",
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    ";
        }
        // line 63
        echo "},
";
        
        $__internal_827a44b4af05ff1aa7e210450917ce967c6cd13fed175dd53a09066659235b70->leave($__internal_827a44b4af05ff1aa7e210450917ce967c6cd13fed175dd53a09066659235b70_prof);

        
        $__internal_631cc52dc22480ce349ed5d6dcdfa6caf99e19c03474ca844ba570e633e4c187->leave($__internal_631cc52dc22480ce349ed5d6dcdfa6caf99e19c03474ca844ba570e633e4c187_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 63,  214 => 62,  203 => 60,  198 => 59,  195 => 58,  189 => 56,  186 => 55,  180 => 53,  177 => 52,  171 => 50,  168 => 49,  162 => 47,  159 => 46,  153 => 44,  150 => 43,  144 => 41,  141 => 40,  138 => 39,  135 => 38,  132 => 37,  129 => 36,  126 => 35,  120 => 33,  117 => 32,  111 => 30,  108 => 29,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  78 => 19,  75 => 18,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    {% if button.action is defined and button.action is not same as(null) %}
        {% if button.action['vars'] is defined %}
            {% set vars = button.action['vars'] %}
        {% else %}
            {% set vars = {} %}
        {% endif %}
        action: {% include button.action['template'] with vars %},
    {% endif %}
    {% if button.available is defined and button.available is not same as(null) %}
        {% if button.available['vars'] is defined %}
            {% set vars = button.available['vars'] %}
        {% else %}
            {% set vars = {} %}
        {% endif %}
        available: {% include button.available['template'] with vars %},
    {% endif %}
    {% if button.className is defined and button.className is not same as(null) %}
        className: \"{{ button.className  }}\",
    {% endif %}
    {% if button.destroy is defined and button.destroy is not same as(null) %}
        {% if button.destroy['vars'] is defined %}
            {% set vars = button.destroy['vars'] %}
        {% else %}
            {% set vars = {} %}
        {% endif %}
        destroy: {% include button.destroy['template'] with vars %},
    {% endif %}
    {% if button.enabled is defined and button.enabled is not same as(null) %}
        enabled: {{ button.enabled|sg_datatables_bool_var }},
    {% endif %}
    {% if button.extend is defined and button.extend is not same as(null) %}
        extend: \"{{ button.extend }}\",
    {% endif %}
    {% if button.init is defined and button.init is not same as(null) %}
        {% if button.init['vars'] is defined %}
            {% set vars = button.init['vars'] %}
        {% else %}
            {% set vars = {} %}
        {% endif %}
        init: {% include button.init['template'] with vars %},
    {% endif %}
    {% if button.key is defined and button.key is not same as(null) %}
        key: \"{{ button.key }}\",
    {% endif %}
    {% if button.name is defined and button.name is not same as(null) %}
        name: \"{{ button.name }}\",
    {% endif %}
    {% if button.namespace is defined and button.namespace is not same as(null) %}
        namespace: \"{{ button.namespace }}\",
    {% endif %}
    {% if button.text is defined and button.text is not same as(null) %}
        text: \"{{ button.text }}\",
    {% endif %}
    {% if button.titleAttr is defined and button.titleAttr is not same as(null) %}
        titleAttr: \"{{ button.titleAttr }}\",
    {% endif %}
    {% if button.buttonOptions is defined and button.buttonOptions is not same as(null) %}
        {% for key, option in button.buttonOptions %}
            {{ key }}: {{ option|json_encode|raw }},
        {% endfor %}
    {% endif %}
},
", "SgDatatablesBundle:datatable:button.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/datatable/button.html.twig");
    }
}
