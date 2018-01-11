<?php

/* SgDatatablesBundle:filter:daterange.html.twig */
class __TwigTemplate_5305311ffee41c0f5db211d583d071ad78861c5610ae06b922bfb98aa32a8e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_550c162c4c81f22750f26fa07895620b70b999bedef5bb995e13a91bec3f4a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550c162c4c81f22750f26fa07895620b70b999bedef5bb995e13a91bec3f4a74->enter($__internal_550c162c4c81f22750f26fa07895620b70b999bedef5bb995e13a91bec3f4a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:daterange.html.twig"));

        $__internal_c70429c954d6c31682a383d01124c7d7b57e063c38b3859c5c36abb2ff78c61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70429c954d6c31682a383d01124c7d7b57e063c38b3859c5c36abb2ff78c61c->enter($__internal_c70429c954d6c31682a383d01124c7d7b57e063c38b3859c5c36abb2ff78c61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:daterange.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array()), "html", null, true);
        echo "\"
";
        $context["filter_input_type"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        ob_start();
        // line 14
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "-filter-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "index", array()), "html", null, true);
        $context["filter_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        ob_start();
        // line 18
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
        echo "\"";
        $context["filter_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        ob_start();
        // line 22
        echo "    class=\"sg-datatables-individual-filtering";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "classes", array()) === null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "classes", array()), "html", null, true);
        }
        echo "\"
";
        $context["filter_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
";
        // line 25
        ob_start();
        // line 26
        echo "    ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()) === null)) {
            echo "style=\"width:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo ";\"";
        }
        $context["filter_width"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholder", array()) === true)) {
            // line 31
            echo "        placeholder=\"";
            if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholderText", array()) === null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholderText", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_trim_filter(strip_tags($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "title", array()))), "html", null, true);
            }
            echo "\"
    ";
        }
        $context["filter_input_placeholder"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        ob_start();
        // line 36
        echo "    data-search-column-index=\"";
        echo twig_escape_filter($this->env, ($context["search_column_index"] ?? $this->getContext($context, "search_column_index")), "html", null, true);
        echo "\"
";
        $context["filter_search_column_index"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
";
        // line 39
        ob_start();
        // line 40
        echo "    ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()) === null)) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        $context["filter_column_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
";
        // line 43
        ob_start();
        // line 44
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "initialSearch", array())) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "initialSearch", array()), "html", null, true);
            echo "\"";
        }
        $context["filter_input_initial_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        ob_start();
        // line 48
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "-filter-cancel-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "index", array()), "html", null, true);
        $context["cancel_button_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        ob_start();
        // line 52
        echo "    ";
        if ((true == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cancelButton", array()))) {
            // line 53
            echo "        <button type=\"button\"
                id=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? $this->getContext($context, "cancel_button_id_selector")), "html", null, true);
            echo "\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    ";
        }
        $context["cancel_button_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "
";
        // line 60
        ob_start();
        // line 61
        echo "    ";
        if ((true == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cancelButton", array()))) {
            // line 62
            echo "        <script type=\"text/javascript\">
            \$(\"#";
            // line 63
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? $this->getContext($context, "cancel_button_id_selector")), "html", null, true);
            echo "\").click(function() {
                if ('' != \$(\"#";
            // line 64
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\").val()) {
                    \$(\"#";
            // line 65
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\")
                        .val('')
                        .change();
                }
            });
        </script>
    ";
        }
        $context["cancel_button_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('html', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_550c162c4c81f22750f26fa07895620b70b999bedef5bb995e13a91bec3f4a74->leave($__internal_550c162c4c81f22750f26fa07895620b70b999bedef5bb995e13a91bec3f4a74_prof);

        
        $__internal_c70429c954d6c31682a383d01124c7d7b57e063c38b3859c5c36abb2ff78c61c->leave($__internal_c70429c954d6c31682a383d01124c7d7b57e063c38b3859c5c36abb2ff78c61c_prof);

    }

    // line 74
    public function block_html($context, array $blocks = array())
    {
        $__internal_e6b7d18af58c531b7d83eaf26f1f8bb81337cfd75b0f2521e0cb7d9d520baac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b7d18af58c531b7d83eaf26f1f8bb81337cfd75b0f2521e0cb7d9d520baac2->enter($__internal_e6b7d18af58c531b7d83eaf26f1f8bb81337cfd75b0f2521e0cb7d9d520baac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_1fdb0c5bd3d56903b82ed72b7dcda970a9a8c2093fcce3398b8dff2c31a8032c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdb0c5bd3d56903b82ed72b7dcda970a9a8c2093fcce3398b8dff2c31a8032c->enter($__internal_1fdb0c5bd3d56903b82ed72b7dcda970a9a8c2093fcce3398b8dff2c31a8032c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 75
        echo "    <input ";
        echo twig_escape_filter($this->env, ($context["filter_input_type"] ?? $this->getContext($context, "filter_input_type")), "html", null, true);
        echo "            ";
        // line 76
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_selector"] ?? $this->getContext($context, "filter_selector")), "html", null, true);
        echo "             ";
        // line 77
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_classes"] ?? $this->getContext($context, "filter_classes")), "html", null, true);
        echo "              ";
        // line 78
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_width"] ?? $this->getContext($context, "filter_width")), "html", null, true);
        echo "                ";
        // line 79
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_placeholder"] ?? $this->getContext($context, "filter_input_placeholder")), "html", null, true);
        echo "    ";
        // line 80
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_search_column_index"] ?? $this->getContext($context, "filter_search_column_index")), "html", null, true);
        echo "  ";
        // line 81
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "          ";
        // line 82
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_initial_search"] ?? $this->getContext($context, "filter_input_initial_search")), "html", null, true);
        echo " ";
        // line 83
        echo "    />
    ";
        // line 84
        echo twig_escape_filter($this->env, ($context["cancel_button_html"] ?? $this->getContext($context, "cancel_button_html")), "html", null, true);
        echo "
";
        
        $__internal_1fdb0c5bd3d56903b82ed72b7dcda970a9a8c2093fcce3398b8dff2c31a8032c->leave($__internal_1fdb0c5bd3d56903b82ed72b7dcda970a9a8c2093fcce3398b8dff2c31a8032c_prof);

        
        $__internal_e6b7d18af58c531b7d83eaf26f1f8bb81337cfd75b0f2521e0cb7d9d520baac2->leave($__internal_e6b7d18af58c531b7d83eaf26f1f8bb81337cfd75b0f2521e0cb7d9d520baac2_prof);

    }

    // line 87
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9800b6901bd088afd48b1a2bd4c5eafb2d10fca018758e95b6520972acc0414d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9800b6901bd088afd48b1a2bd4c5eafb2d10fca018758e95b6520972acc0414d->enter($__internal_9800b6901bd088afd48b1a2bd4c5eafb2d10fca018758e95b6520972acc0414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_bb7085343b0b65ca4625e4a01b5968b7583d9bca6231e64fe5e050a84c0115be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7085343b0b65ca4625e4a01b5968b7583d9bca6231e64fe5e050a84c0115be->enter($__internal_bb7085343b0b65ca4625e4a01b5968b7583d9bca6231e64fe5e050a84c0115be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 88
        echo "    <script type=\"text/javascript\">
        moment.locale(\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\");
        \$(\"#";
        // line 90
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
        echo "\").daterangepicker({
            autoUpdateInput: false,
            locale: {
                format: \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.daterange.format", array(), "messages"), "html", null, true);
        echo "\",
                applyLabel: \"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.daterange.apply", array(), "messages"), "html", null, true);
        echo "\",
                cancelLabel: \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.daterange.cancel", array(), "messages"), "html", null, true);
        echo "\",
                daysOfWeek: moment.weekdaysMin(),
                monthNames: moment.monthsShort(),
                firstDay: moment.localeData().firstDayOfWeek()
            }
        }).on('cancel.daterangepicker', function (ev, picker) {
            \$(this).val('');
            \$(this).change();
          })
          .on('apply.daterangepicker', function (ev, picker) {
                \$(this).val(picker.startDate.format(\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.daterange.format", array(), "messages"), "html", null, true);
        echo "\") + ' - ' + picker.endDate.format(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.daterange.format", array(), "messages"), "html", null, true);
        echo "\"));
                \$(this).change();
          });
    </script>
    ";
        // line 109
        echo twig_escape_filter($this->env, ($context["cancel_button_js"] ?? $this->getContext($context, "cancel_button_js")), "html", null, true);
        echo "
";
        
        $__internal_bb7085343b0b65ca4625e4a01b5968b7583d9bca6231e64fe5e050a84c0115be->leave($__internal_bb7085343b0b65ca4625e4a01b5968b7583d9bca6231e64fe5e050a84c0115be_prof);

        
        $__internal_9800b6901bd088afd48b1a2bd4c5eafb2d10fca018758e95b6520972acc0414d->leave($__internal_9800b6901bd088afd48b1a2bd4c5eafb2d10fca018758e95b6520972acc0414d_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:filter:daterange.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 109,  305 => 105,  292 => 95,  288 => 94,  284 => 93,  278 => 90,  274 => 89,  271 => 88,  262 => 87,  250 => 84,  247 => 83,  243 => 82,  239 => 81,  235 => 80,  231 => 79,  227 => 78,  223 => 77,  219 => 76,  215 => 75,  206 => 74,  196 => 87,  193 => 86,  191 => 74,  188 => 73,  177 => 65,  173 => 64,  169 => 63,  166 => 62,  163 => 61,  161 => 60,  158 => 59,  150 => 54,  147 => 53,  144 => 52,  142 => 51,  134 => 48,  132 => 47,  124 => 44,  122 => 43,  119 => 42,  111 => 40,  109 => 39,  106 => 38,  100 => 36,  98 => 35,  95 => 34,  84 => 31,  81 => 30,  79 => 29,  76 => 28,  68 => 26,  66 => 25,  63 => 24,  54 => 22,  52 => 21,  47 => 18,  45 => 17,  37 => 14,  35 => 13,  29 => 10,  27 => 9,);
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
{% set filter_input_type %}
    type=\"{{ column.filter.type }}\"
{% endset %}

{%- set filter_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-{{ column.index }}
{%- endset -%}

{%- set filter_selector -%}
    id=\"{{ filter_id_selector }}\"
{%- endset -%}

{% set filter_classes %}
    class=\"sg-datatables-individual-filtering{% if column.filter.classes is not same as(null) %} {{ column.filter.classes }}{% endif %}\"
{% endset %}

{% set filter_width %}
    {% if column.width is not same as(null) %}style=\"width:{{ column.width }};\"{% endif %}
{% endset %}

{% set filter_input_placeholder %}
    {% if column.filter.placeholder is same as(true) %}
        placeholder=\"{% if column.filter.placeholderText is not same as(null) %}{{ column.filter.placeholderText }}{% else %}{{ column.title|striptags|trim }}{% endif %}\"
    {% endif %}
{% endset %}

{% set filter_search_column_index %}
    data-search-column-index=\"{{ search_column_index }}\"
{% endset %}

{% set filter_column_name %}
    {% if column.name is not same as(null) %}name=\"{{ column.name }}\"{% endif %}
{% endset %}

{% set filter_input_initial_search %}
    {% if column.filter.initialSearch %}value=\"{{ column.filter.initialSearch }}\"{% endif %}
{% endset %}

{%- set cancel_button_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-cancel-{{ column.index }}
{%- endset -%}

{% set cancel_button_html %}
    {% if true == column.filter.cancelButton %}
        <button type=\"button\"
                id=\"{{ cancel_button_id_selector }}\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    {% endif %}
{% endset %}

{% set cancel_button_js %}
    {% if true == column.filter.cancelButton %}
        <script type=\"text/javascript\">
            \$(\"#{{ cancel_button_id_selector }}\").click(function() {
                if ('' != \$(\"#{{ filter_id_selector }}\").val()) {
                    \$(\"#{{ filter_id_selector }}\")
                        .val('')
                        .change();
                }
            });
        </script>
    {% endif %}
{% endset %}

{% block html %}
    <input {{ filter_input_type }}            {# type = \"text\" #}
            {{ filter_selector }}             {# id = \"\" #}
            {{ filter_classes }}              {# class = \"\" #}
            {{ filter_width }}                {# style = \"width:\" #}
            {{ filter_input_placeholder }}    {# placeholder = \"\" #}
            {{ filter_search_column_index }}  {# data-search-column-index = \"\" #}
            {{ filter_column_name }}          {# name = \"\" #}
            {{ filter_input_initial_search }} {# value = \"\" #}
    />
    {{ cancel_button_html }}
{% endblock %}

{% block javascript %}
    <script type=\"text/javascript\">
        moment.locale(\"{{ app.request.locale }}\");
        \$(\"#{{ filter_id_selector }}\").daterangepicker({
            autoUpdateInput: false,
            locale: {
                format: \"{{ 'sg.datatables.daterange.format'|trans({}, 'messages') }}\",
                applyLabel: \"{{ 'sg.datatables.daterange.apply'|trans({}, 'messages') }}\",
                cancelLabel: \"{{ 'sg.datatables.daterange.cancel'|trans({}, 'messages') }}\",
                daysOfWeek: moment.weekdaysMin(),
                monthNames: moment.monthsShort(),
                firstDay: moment.localeData().firstDayOfWeek()
            }
        }).on('cancel.daterangepicker', function (ev, picker) {
            \$(this).val('');
            \$(this).change();
          })
          .on('apply.daterangepicker', function (ev, picker) {
                \$(this).val(picker.startDate.format(\"{{ 'sg.datatables.daterange.format'|trans({}, 'messages') }}\") + ' - ' + picker.endDate.format(\"{{ 'sg.datatables.daterange.format'|trans({}, 'messages') }}\"));
                \$(this).change();
          });
    </script>
    {{ cancel_button_js }}
{% endblock %}
", "SgDatatablesBundle:filter:daterange.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/filter/daterange.html.twig");
    }
}
