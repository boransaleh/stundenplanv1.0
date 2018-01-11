<?php

/* @SgDatatables/render/datetime.html.twig */
class __TwigTemplate_be25ce5ec352c26c92b953b554342dd088133f0cafcddc8912f8fec55f466ac4 extends Twig_Template
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
        $__internal_67ad521c76b5e88c394aa57f2fb8b167f8e65b8235e9148fd846d85ec196cb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ad521c76b5e88c394aa57f2fb8b167f8e65b8235e9148fd846d85ec196cb9a->enter($__internal_67ad521c76b5e88c394aa57f2fb8b167f8e65b8235e9148fd846d85ec196cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/render/datetime.html.twig"));

        $__internal_07f64db750af6d9145c0fb04c9de4b427318ee81f725dc79ff41671e0a572228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f64db750af6d9145c0fb04c9de4b427318ee81f725dc79ff41671e0a572228->enter($__internal_07f64db750af6d9145c0fb04c9de4b427318ee81f725dc79ff41671e0a572228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/render/datetime.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-datetime-";
        echo twig_escape_filter($this->env, ($context["row_id"] ?? $this->getContext($context, "row_id")), "html", null, true);
        $context["datetime_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        ob_start();
        // line 14
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["datetime_id_selector"] ?? $this->getContext($context, "datetime_id_selector")), "html", null, true);
        echo "\"";
        $context["datetime_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        if (array_key_exists("column_class_editable_selector", $context)) {
            // line 18
            echo "    <div ";
            echo twig_escape_filter($this->env, ($context["datetime_selector"] ?? $this->getContext($context, "datetime_selector")), "html", null, true);
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["column_class_editable_selector"] ?? $this->getContext($context, "column_class_editable_selector")), "html", null, true);
            echo "\" data-pk=\"";
            echo twig_escape_filter($this->env, ($context["pk"] ?? $this->getContext($context, "pk")), "html", null, true);
            echo "\" ";
            if ( !(($context["path"] ?? $this->getContext($context, "path")) === null)) {
                echo "data-path=\"";
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\"";
            }
            echo "></div>
";
        } else {
            // line 20
            echo "    <div ";
            echo twig_escape_filter($this->env, ($context["datetime_selector"] ?? $this->getContext($context, "datetime_selector")), "html", null, true);
            echo ">
        ";
            // line 21
            if (((($context["data"] ?? $this->getContext($context, "data")) === null) &&  !(($context["default_content"] ?? $this->getContext($context, "default_content")) === null))) {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, ($context["default_content"] ?? $this->getContext($context, "default_content")), "html", null, true);
                echo "
        ";
            }
            // line 24
            echo "    </div>
";
        }
        // line 26
        echo "
";
        // line 27
        if ( !(($context["data"] ?? $this->getContext($context, "data")) === null)) {
            // line 28
            echo "
    <script type=\"text/javascript\">
    \$(function() {
        moment.locale(\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
            echo "\");

        ";
            // line 33
            if ((($context["timeago"] ?? $this->getContext($context, "timeago")) === false)) {
                // line 34
                echo "        \$(\"#";
                echo twig_escape_filter($this->env, ($context["datetime_id_selector"] ?? $this->getContext($context, "datetime_id_selector")), "html", null, true);
                echo "\").html(moment.unix(";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "U"), "html", null, true);
                echo ").format(\"";
                echo twig_escape_filter($this->env, ($context["date_format"] ?? $this->getContext($context, "date_format")), "html", null, true);
                echo "\"));
        ";
            } else {
                // line 36
                echo "        \$(\"#";
                echo twig_escape_filter($this->env, ($context["datetime_id_selector"] ?? $this->getContext($context, "datetime_id_selector")), "html", null, true);
                echo "\").html(moment.unix(";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "U"), "html", null, true);
                echo ").fromNow());
        ";
            }
            // line 38
            echo "    });
</script>
";
        }
        
        $__internal_67ad521c76b5e88c394aa57f2fb8b167f8e65b8235e9148fd846d85ec196cb9a->leave($__internal_67ad521c76b5e88c394aa57f2fb8b167f8e65b8235e9148fd846d85ec196cb9a_prof);

        
        $__internal_07f64db750af6d9145c0fb04c9de4b427318ee81f725dc79ff41671e0a572228->leave($__internal_07f64db750af6d9145c0fb04c9de4b427318ee81f725dc79ff41671e0a572228_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/render/datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  102 => 36,  92 => 34,  90 => 33,  85 => 31,  80 => 28,  78 => 27,  75 => 26,  71 => 24,  65 => 22,  63 => 21,  58 => 20,  42 => 18,  40 => 17,  35 => 14,  33 => 13,  27 => 10,  25 => 9,);
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
{%- set datetime_id_selector -%}
    sg-datatables-{{ datatable_name }}-datetime-{{ row_id }}
{%- endset -%}

{%- set datetime_selector -%}
    id=\"{{ datetime_id_selector }}\"
{%- endset -%}

{% if column_class_editable_selector is defined %}
    <div {{ datetime_selector }} class=\"{{ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}></div>
{% else %}
    <div {{ datetime_selector }}>
        {% if data is same as(null) and default_content is not same as(null) %}
            {{ default_content }}
        {% endif %}
    </div>
{% endif %}

{% if data is not same as(null) %}

    <script type=\"text/javascript\">
    \$(function() {
        moment.locale(\"{{ app.request.locale }}\");

        {% if timeago is same as(false) %}
        \$(\"#{{ datetime_id_selector }}\").html(moment.unix({{ data|date('U') }}).format(\"{{ date_format }}\"));
        {% else %}
        \$(\"#{{ datetime_id_selector }}\").html(moment.unix({{ data|date('U') }}).fromNow());
        {% endif %}
    });
</script>
{% endif %}
", "@SgDatatables/render/datetime.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\render\\datetime.html.twig");
    }
}
