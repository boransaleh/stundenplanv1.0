<?php

/* @SgDatatables/column/column.html.twig */
class __TwigTemplate_9d331a27ca562a94b7e86a91ab6ac8fbae2136ddd68a569cafb659b9387ef958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'title' => array($this, 'block_title'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_459f2181c672c240a76646865e231262e65eee3463921e85945631a04e2944b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459f2181c672c240a76646865e231262e65eee3463921e85945631a04e2944b6->enter($__internal_459f2181c672c240a76646865e231262e65eee3463921e85945631a04e2944b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/column/column.html.twig"));

        $__internal_1e09786a998165ce3b10cb11360bda7e66c8c60133b39aa06f69d72e713e8a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e09786a998165ce3b10cb11360bda7e66c8c60133b39aa06f69d72e713e8a5a->enter($__internal_1e09786a998165ce3b10cb11360bda7e66c8c60133b39aa06f69d72e713e8a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/column/column.html.twig"));

        // line 9
        echo "{
    ";
        // line 10
        $this->displayBlock('common', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('data', $context, $blocks);
        // line 64
        echo "},
";
        
        $__internal_459f2181c672c240a76646865e231262e65eee3463921e85945631a04e2944b6->leave($__internal_459f2181c672c240a76646865e231262e65eee3463921e85945631a04e2944b6_prof);

        
        $__internal_1e09786a998165ce3b10cb11360bda7e66c8c60133b39aa06f69d72e713e8a5a->leave($__internal_1e09786a998165ce3b10cb11360bda7e66c8c60133b39aa06f69d72e713e8a5a_prof);

    }

    // line 10
    public function block_common($context, array $blocks = array())
    {
        $__internal_eb9707a4df91a45ab4bea42eabd9f59cebd1a4cae10c785fca129b9d5e8e3d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9707a4df91a45ab4bea42eabd9f59cebd1a4cae10c785fca129b9d5e8e3d89->enter($__internal_eb9707a4df91a45ab4bea42eabd9f59cebd1a4cae10c785fca129b9d5e8e3d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_2e1dd4b16e8e535ab58e35ff2b98cf8e70e15757173950b78e438b00458baa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1dd4b16e8e535ab58e35ff2b98cf8e70e15757173950b78e438b00458baa77->enter($__internal_2e1dd4b16e8e535ab58e35ff2b98cf8e70e15757173950b78e438b00458baa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 11
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "cellType", array()) === null)) {
            // line 12
            echo "            \"cellType\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "cellType", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 14
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "contentPadding", array()) === null)) {
            // line 15
            echo "            \"contentPadding\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "contentPadding", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 17
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "defaultContent", array()) === null)) {
            // line 18
            echo "            \"defaultContent\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 20
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()) === null)) {
            // line 21
            echo "            \"name\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 23
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()) === null)) {
            // line 24
            echo "            \"width\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 26
        echo "        ";
        $this->displayBlock('title', $context, $blocks);
        // line 31
        echo "        ";
        if ((($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "searchable", array()) === true) || ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "searchable", array()) === false))) {
            // line 32
            echo "            \"searchable\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "searchable", array())), "html", null, true);
            echo ",
        ";
        }
        // line 34
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "visible", array()) === true)) {
            // line 35
            echo "            \"visible\": true,
            ";
            // line 36
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()) === null)) {
                // line 37
                echo "                \"className\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()), "html", null, true);
                echo "\",
            ";
            }
            // line 39
            echo "        ";
        }
        // line 40
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "visible", array()) === false)) {
            // line 41
            echo "            \"visible\": false,
            \"className\": \"never ";
            // line 42
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()) === null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()), "html", null, true);
            }
            echo "\",
        ";
        }
        // line 44
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderable", array()) === true)) {
            // line 45
            echo "            \"orderable\": true,
            ";
            // line 46
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderSequence", array()) === null)) {
                // line 47
                echo "                \"orderSequence\": ";
                echo $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderSequence", array());
                echo ",
            ";
            }
            // line 49
            echo "            ";
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderData", array()) === null)) {
                // line 50
                echo "                \"orderData\": ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderData", array()), "html", null, true);
                echo ",
            ";
            }
            // line 52
            echo "        ";
        }
        // line 53
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderable", array()) === false)) {
            // line 54
            echo "            \"orderable\": false,
        ";
        }
        // line 56
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "responsivePriority", array()) === null)) {
            // line 57
            echo "            \"responsivePriority\": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "responsivePriority", array()), "html", null, true);
            echo ",
        ";
        }
        // line 59
        echo "    ";
        
        $__internal_2e1dd4b16e8e535ab58e35ff2b98cf8e70e15757173950b78e438b00458baa77->leave($__internal_2e1dd4b16e8e535ab58e35ff2b98cf8e70e15757173950b78e438b00458baa77_prof);

        
        $__internal_eb9707a4df91a45ab4bea42eabd9f59cebd1a4cae10c785fca129b9d5e8e3d89->leave($__internal_eb9707a4df91a45ab4bea42eabd9f59cebd1a4cae10c785fca129b9d5e8e3d89_prof);

    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        $__internal_465f77d1c0871f5836007333a5676797a334ab2b3ad16ef3dcc263bdfc02b8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465f77d1c0871f5836007333a5676797a334ab2b3ad16ef3dcc263bdfc02b8ff->enter($__internal_465f77d1c0871f5836007333a5676797a334ab2b3ad16ef3dcc263bdfc02b8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eea6cda49f74da645204201f72de79ca72f9960bbdaa46f63aeb8d2bc69e3175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea6cda49f74da645204201f72de79ca72f9960bbdaa46f63aeb8d2bc69e3175->enter($__internal_eea6cda49f74da645204201f72de79ca72f9960bbdaa46f63aeb8d2bc69e3175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 27
        echo "            ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "title", array()) === null)) {
            // line 28
            echo "                \"title\": \"";
            echo $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "title", array());
            echo "\",
            ";
        }
        // line 30
        echo "        ";
        
        $__internal_eea6cda49f74da645204201f72de79ca72f9960bbdaa46f63aeb8d2bc69e3175->leave($__internal_eea6cda49f74da645204201f72de79ca72f9960bbdaa46f63aeb8d2bc69e3175_prof);

        
        $__internal_465f77d1c0871f5836007333a5676797a334ab2b3ad16ef3dcc263bdfc02b8ff->leave($__internal_465f77d1c0871f5836007333a5676797a334ab2b3ad16ef3dcc263bdfc02b8ff_prof);

    }

    // line 61
    public function block_data($context, array $blocks = array())
    {
        $__internal_68c2fc92bf4374280146271c3136d4d017dcf9a7a40592166e2b203993f4bc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c2fc92bf4374280146271c3136d4d017dcf9a7a40592166e2b203993f4bc6e->enter($__internal_68c2fc92bf4374280146271c3136d4d017dcf9a7a40592166e2b203993f4bc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_977ea439beb5182aba8f886aa48b5f40e327cc276299a1cc21c96716ea601839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977ea439beb5182aba8f886aa48b5f40e327cc276299a1cc21c96716ea601839->enter($__internal_977ea439beb5182aba8f886aa48b5f40e327cc276299a1cc21c96716ea601839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 62
        echo "        \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        
        $__internal_977ea439beb5182aba8f886aa48b5f40e327cc276299a1cc21c96716ea601839->leave($__internal_977ea439beb5182aba8f886aa48b5f40e327cc276299a1cc21c96716ea601839_prof);

        
        $__internal_68c2fc92bf4374280146271c3136d4d017dcf9a7a40592166e2b203993f4bc6e->leave($__internal_68c2fc92bf4374280146271c3136d4d017dcf9a7a40592166e2b203993f4bc6e_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/column/column.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 62,  225 => 61,  215 => 30,  209 => 28,  206 => 27,  197 => 26,  187 => 59,  181 => 57,  178 => 56,  174 => 54,  171 => 53,  168 => 52,  162 => 50,  159 => 49,  153 => 47,  151 => 46,  148 => 45,  145 => 44,  138 => 42,  135 => 41,  132 => 40,  129 => 39,  123 => 37,  121 => 36,  118 => 35,  115 => 34,  109 => 32,  106 => 31,  103 => 26,  97 => 24,  94 => 23,  88 => 21,  85 => 20,  79 => 18,  76 => 17,  70 => 15,  67 => 14,  61 => 12,  58 => 11,  49 => 10,  38 => 64,  36 => 61,  33 => 60,  31 => 10,  28 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{
    {% block common %}
        {% if column.cellType is not same as(null) %}
            \"cellType\": \"{{ column.cellType }}\",
        {% endif %}
        {% if column.contentPadding is not same as(null) %}
            \"contentPadding\": \"{{ column.contentPadding }}\",
        {% endif %}
        {% if column.defaultContent is not same as(null) %}
            \"defaultContent\": \"{{ column.defaultContent }}\",
        {% endif %}
        {% if column.name is not same as(null) %}
            \"name\": \"{{ column.name }}\",
        {% endif %}
        {% if column.width is not same as(null) %}
            \"width\": \"{{ column.width }}\",
        {% endif %}
        {% block title %}
            {% if column.title is not same as(null) %}
                \"title\": \"{{ column.title|raw }}\",
            {% endif %}
        {% endblock %}
        {% if column.searchable is same as(true) or column.searchable is same as(false) %}
            \"searchable\": {{ column.searchable|sg_datatables_bool_var }},
        {% endif %}
        {% if column.visible is same as(true) %}
            \"visible\": true,
            {% if column.className is not same as(null) %}
                \"className\": \"{{ column.className }}\",
            {% endif %}
        {% endif %}
        {% if column.visible is same as(false) %}
            \"visible\": false,
            \"className\": \"never {% if column.className is not same as(null) %}{{ column.className }}{% endif %}\",
        {% endif %}
        {% if column.orderable is same as(true) %}
            \"orderable\": true,
            {% if column.orderSequence is not same as(null) %}
                \"orderSequence\": {{ column.orderSequence|raw }},
            {% endif %}
            {% if column.orderData is not same as(null) %}
                \"orderData\": {{ column.orderData }},
            {% endif %}
        {% endif %}
        {% if column.orderable is same as(false) %}
            \"orderable\": false,
        {% endif %}
        {% if column.responsivePriority is not same as(null) %}
            \"responsivePriority\": {{ column.responsivePriority }},
        {% endif %}
    {% endblock %}

    {% block data %}
        \"data\": \"{{ column.data }}\",
    {% endblock %}
},
", "@SgDatatables/column/column.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\column\\column.html.twig");
    }
}
