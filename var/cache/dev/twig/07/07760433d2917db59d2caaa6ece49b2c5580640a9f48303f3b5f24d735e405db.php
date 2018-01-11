<?php

/* @SgDatatables/filter/select2.html.twig */
class __TwigTemplate_a1cc5aec77f91bf9b66920cfd0164430b1e12da5ec14028320bff12975ceda97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:filter:select.html.twig", "@SgDatatables/filter/select2.html.twig", 9);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:filter:select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9210e2b9448f4bd91f43b888af2b3e058b3163b701d3aa53bcdd7cb589b3c94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9210e2b9448f4bd91f43b888af2b3e058b3163b701d3aa53bcdd7cb589b3c94a->enter($__internal_9210e2b9448f4bd91f43b888af2b3e058b3163b701d3aa53bcdd7cb589b3c94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/filter/select2.html.twig"));

        $__internal_e586fbe80d4569c9cab3eacea89a795605ab401ed8ed5516604d219092adb6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e586fbe80d4569c9cab3eacea89a795605ab401ed8ed5516604d219092adb6dd->enter($__internal_e586fbe80d4569c9cab3eacea89a795605ab401ed8ed5516604d219092adb6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/filter/select2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9210e2b9448f4bd91f43b888af2b3e058b3163b701d3aa53bcdd7cb589b3c94a->leave($__internal_9210e2b9448f4bd91f43b888af2b3e058b3163b701d3aa53bcdd7cb589b3c94a_prof);

        
        $__internal_e586fbe80d4569c9cab3eacea89a795605ab401ed8ed5516604d219092adb6dd->leave($__internal_e586fbe80d4569c9cab3eacea89a795605ab401ed8ed5516604d219092adb6dd_prof);

    }

    // line 11
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6119c78e6fa03bd92ce52a58ddec5fca783d8b40af65a22eba1a6041adde5e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6119c78e6fa03bd92ce52a58ddec5fca783d8b40af65a22eba1a6041adde5e4e->enter($__internal_6119c78e6fa03bd92ce52a58ddec5fca783d8b40af65a22eba1a6041adde5e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_591596abcff2107f22db36c4aea53bd75478bd92fa5aa47c0c725d538ed71fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591596abcff2107f22db36c4aea53bd75478bd92fa5aa47c0c725d538ed71fc6->enter($__internal_591596abcff2107f22db36c4aea53bd75478bd92fa5aa47c0c725d538ed71fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(\"#";
        // line 15
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
        echo "\").select2({
            ";
        // line 16
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholder", array()) === null)) {
            // line 17
            echo "                placeholder: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholder", array()), "html", null, true);
            echo "\",
            ";
        }
        // line 19
        echo "            ";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "allowClear", array()) === null)) {
            // line 20
            echo "                allowClear: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "allowClear", array())), "html", null, true);
            echo ",
            ";
        }
        // line 22
        echo "            ";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "tags", array()) === null)) {
            // line 23
            echo "                tags: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "tags", array())), "html", null, true);
            echo ",
            ";
        }
        // line 25
        echo "            ";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "language", array()) === null)) {
            // line 26
            echo "                language: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "language", array()), "html", null, true);
            echo "\",
            ";
        } else {
            // line 28
            echo "                language: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
            echo "\",
            ";
        }
        // line 30
        echo "            dropdownAutoWidth : true,
            ";
        // line 31
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "url", array()) === null)) {
            // line 32
            echo "                ajax: {
                    url: \"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "url", array()));
            echo "\",
                    dataType: 'json',
                    delay: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "delay", array()), "html", null, true);
            echo ",
                    cache: ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cache", array())), "html", null, true);
            echo ",
                    data: function (params) {
                        return {
                            q: params.term,
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;

                        var resultArray = [];
                        for (var id in data) {
                            resultArray.push({
                                id : data[id],
                                text : data[id]
                            });
                        }

                        return {
                            results: resultArray,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    }
                },
            ";
        }
        // line 63
        echo "        });
        ";
        // line 64
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "searchColumn", array())) {
            // line 65
            echo "            \$(\"#";
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\").val(\$('#";
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo " option:first-child').val()).trigger('change');
        ";
        }
        // line 67
        echo "    </script>
";
        
        $__internal_591596abcff2107f22db36c4aea53bd75478bd92fa5aa47c0c725d538ed71fc6->leave($__internal_591596abcff2107f22db36c4aea53bd75478bd92fa5aa47c0c725d538ed71fc6_prof);

        
        $__internal_6119c78e6fa03bd92ce52a58ddec5fca783d8b40af65a22eba1a6041adde5e4e->leave($__internal_6119c78e6fa03bd92ce52a58ddec5fca783d8b40af65a22eba1a6041adde5e4e_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/filter/select2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 67,  153 => 65,  151 => 64,  148 => 63,  118 => 36,  114 => 35,  109 => 33,  106 => 32,  104 => 31,  101 => 30,  95 => 28,  89 => 26,  86 => 25,  80 => 23,  77 => 22,  71 => 20,  68 => 19,  62 => 17,  60 => 16,  56 => 15,  49 => 12,  40 => 11,  11 => 9,);
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
{% extends 'SgDatatablesBundle:filter:select.html.twig' %}

{% block javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(\"#{{ filter_id_selector }}\").select2({
            {% if column.filter.placeholder is not same as(null) %}
                placeholder: \"{{ column.filter.placeholder }}\",
            {% endif %}
            {% if column.filter.allowClear is not same as(null) %}
                allowClear: {{ column.filter.allowClear|sg_datatables_bool_var }},
            {% endif %}
            {% if column.filter.tags is not same as(null) %}
                tags: {{ column.filter.tags|sg_datatables_bool_var }},
            {% endif %}
            {% if column.filter.language is not same as(null) %}
                language: \"{{ column.filter.language }}\",
            {% else %}
                language: \"{{ app.request.locale }}\",
            {% endif %}
            dropdownAutoWidth : true,
            {% if column.filter.url is not same as(null) %}
                ajax: {
                    url: \"{{ path(column.filter.url) }}\",
                    dataType: 'json',
                    delay: {{ column.filter.delay }},
                    cache: {{ column.filter.cache|sg_datatables_bool_var }},
                    data: function (params) {
                        return {
                            q: params.term,
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;

                        var resultArray = [];
                        for (var id in data) {
                            resultArray.push({
                                id : data[id],
                                text : data[id]
                            });
                        }

                        return {
                            results: resultArray,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    }
                },
            {% endif %}
        });
        {% if column.filter.searchColumn %}
            \$(\"#{{ filter_id_selector }}\").val(\$('#{{ filter_id_selector }} option:first-child').val()).trigger('change');
        {% endif %}
    </script>
{% endblock %}
", "@SgDatatables/filter/select2.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\filter\\select2.html.twig");
    }
}
