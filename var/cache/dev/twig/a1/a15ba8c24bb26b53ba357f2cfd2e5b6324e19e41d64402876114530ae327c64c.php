<?php

/* @SgDatatables/render/action.html.twig */
class __TwigTemplate_366b6067f8f826fc8d4cb42934aca463fa0ab80539a12af47204d5afa33bf316 extends Twig_Template
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
        $__internal_9a3a05946492ac8fef0f17e65b1dc36c9f4772c807f5357f59a4365afcd025d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3a05946492ac8fef0f17e65b1dc36c9f4772c807f5357f59a4365afcd025d3->enter($__internal_9a3a05946492ac8fef0f17e65b1dc36c9f4772c807f5357f59a4365afcd025d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/render/action.html.twig"));

        $__internal_83ea415ad2f6af7a465dd0be19700b8e85885372cd3c511c4285ddd4e443f7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ea415ad2f6af7a465dd0be19700b8e85885372cd3c511c4285ddd4e443f7fc->enter($__internal_83ea415ad2f6af7a465dd0be19700b8e85885372cd3c511c4285ddd4e443f7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/render/action.html.twig"));

        // line 9
        $context["macros"] = $this;
        // line 10
        echo "
";
        // line 22
        echo "
";
        // line 28
        echo "
";
        // line 38
        echo "
";
        // line 54
        echo "
";
        // line 60
        echo "
";
        // line 61
        echo ($context["start_html_container"] ?? $this->getContext($context, "start_html_container"));
        echo "

";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["actionKey"] => $context["action"]) {
            // line 64
            echo "    ";
            if (($this->getAttribute(($context["render_if_actions"] ?? $this->getContext($context, "render_if_actions")), $context["actionKey"], array(), "array") === true)) {
                // line 65
                echo "        ";
                if (($this->getAttribute($context["action"], "button", array()) === false)) {
                    // line 66
                    echo "            ";
                    echo $this->getAttribute($context["action"], "startHtml", array());
                    echo "
            <a ";
                    // line 67
                    echo $context["macros"]->gethref($context["action"], $this->getAttribute(($context["route_parameters"] ?? $this->getContext($context, "route_parameters")), $context["actionKey"], array(), "array"));
                    echo " ";
                    echo $context["macros"]->getattributes($context["action"]);
                    echo " ";
                    echo $context["macros"]->getconfirm_dialog($context["action"]);
                    echo ">
                ";
                    // line 68
                    echo $context["macros"]->getlink_title($context["action"]);
                    echo "
            </a>
            ";
                    // line 70
                    echo $this->getAttribute($context["action"], "endHtml", array());
                    echo "
        ";
                } else {
                    // line 72
                    echo "            ";
                    echo $this->getAttribute($context["action"], "startHtml", array());
                    echo "
            <button type=\"button\" ";
                    // line 73
                    echo $context["macros"]->getvalue($this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), $context["actionKey"], array(), "array"));
                    echo " ";
                    echo $context["macros"]->getattributes($context["action"]);
                    echo " ";
                    echo $context["macros"]->getconfirm_dialog($context["action"]);
                    echo ">
                ";
                    // line 74
                    echo $context["macros"]->getlink_title($context["action"]);
                    echo "
            </button>
            ";
                    // line 76
                    echo $this->getAttribute($context["action"], "endHtml", array());
                    echo "
        ";
                }
                // line 78
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actionKey'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
";
        // line 81
        echo ($context["end_html_container"] ?? $this->getContext($context, "end_html_container"));
        echo "
";
        
        $__internal_9a3a05946492ac8fef0f17e65b1dc36c9f4772c807f5357f59a4365afcd025d3->leave($__internal_9a3a05946492ac8fef0f17e65b1dc36c9f4772c807f5357f59a4365afcd025d3_prof);

        
        $__internal_83ea415ad2f6af7a465dd0be19700b8e85885372cd3c511c4285ddd4e443f7fc->leave($__internal_83ea415ad2f6af7a465dd0be19700b8e85885372cd3c511c4285ddd4e443f7fc_prof);

    }

    // line 11
    public function getlink_title($__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f0dba9bf5aa1043420d7306e71618515c4088d7866492cb8c4774bd39f16c481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f0dba9bf5aa1043420d7306e71618515c4088d7866492cb8c4774bd39f16c481->enter($__internal_f0dba9bf5aa1043420d7306e71618515c4088d7866492cb8c4774bd39f16c481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_title"));

            $__internal_13456ecf881c417bf658e7ff732192222b478faa1da7b4862c029ceb55ca8f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_13456ecf881c417bf658e7ff732192222b478faa1da7b4862c029ceb55ca8f61->enter($__internal_13456ecf881c417bf658e7ff732192222b478faa1da7b4862c029ceb55ca8f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_title"));

            // line 12
            echo "    ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()) === null) && ($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()) === null))) {
                // line 13
                echo "        ";
                if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()) === null)) {
                    // line 14
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()), "html", null, true);
                    echo "
        ";
                } else {
                    // line 16
                    echo "            null
        ";
                }
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), "html", null, true);
                echo "
    ";
            }
            
            $__internal_13456ecf881c417bf658e7ff732192222b478faa1da7b4862c029ceb55ca8f61->leave($__internal_13456ecf881c417bf658e7ff732192222b478faa1da7b4862c029ceb55ca8f61_prof);

            
            $__internal_f0dba9bf5aa1043420d7306e71618515c4088d7866492cb8c4774bd39f16c481->leave($__internal_f0dba9bf5aa1043420d7306e71618515c4088d7866492cb8c4774bd39f16c481_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getattributes($__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bde82f87883128c3af3bac9bbe324b99e56691d3e9dc201b03b5d3296f51c0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_bde82f87883128c3af3bac9bbe324b99e56691d3e9dc201b03b5d3296f51c0c0->enter($__internal_bde82f87883128c3af3bac9bbe324b99e56691d3e9dc201b03b5d3296f51c0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_6577040ac173e05b9e0f491932ee4b668c1dd551d2db9d96ec65fdf9b9e834c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6577040ac173e05b9e0f491932ee4b668c1dd551d2db9d96ec65fdf9b9e834c9->enter($__internal_6577040ac173e05b9e0f491932ee4b668c1dd551d2db9d96ec65fdf9b9e834c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 24
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "attributes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 25
                echo "        ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6577040ac173e05b9e0f491932ee4b668c1dd551d2db9d96ec65fdf9b9e834c9->leave($__internal_6577040ac173e05b9e0f491932ee4b668c1dd551d2db9d96ec65fdf9b9e834c9_prof);

            
            $__internal_bde82f87883128c3af3bac9bbe324b99e56691d3e9dc201b03b5d3296f51c0c0->leave($__internal_bde82f87883128c3af3bac9bbe324b99e56691d3e9dc201b03b5d3296f51c0c0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getconfirm_dialog($__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_879a862d9c5f6c3c3ebdd68b4266b29fb8d0639929de0b3dd097918d4c5e215e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_879a862d9c5f6c3c3ebdd68b4266b29fb8d0639929de0b3dd097918d4c5e215e->enter($__internal_879a862d9c5f6c3c3ebdd68b4266b29fb8d0639929de0b3dd097918d4c5e215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            $__internal_054999dc5c7d27492b4c1a8551d318dddc11a773c7107a2734c8e29eaa49d7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_054999dc5c7d27492b4c1a8551d318dddc11a773c7107a2734c8e29eaa49d7bf->enter($__internal_054999dc5c7d27492b4c1a8551d318dddc11a773c7107a2734c8e29eaa49d7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            // line 30
            echo "    ";
            if (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "confirm", array()) === true)) {
                // line 31
                echo "        ";
                if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "confirmMessage", array()) === null)) {
                    // line 32
                    echo "            onclick=\"return confirm('";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "confirmMessage", array()), "html", null, true);
                    echo "')\"
        ";
                } else {
                    // line 34
                    echo "            onclick=\"return confirm('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.confirmMessage", array(), "messages"), "html", null, true);
                    echo "')\"
        ";
                }
                // line 36
                echo "    ";
            }
            
            $__internal_054999dc5c7d27492b4c1a8551d318dddc11a773c7107a2734c8e29eaa49d7bf->leave($__internal_054999dc5c7d27492b4c1a8551d318dddc11a773c7107a2734c8e29eaa49d7bf_prof);

            
            $__internal_879a862d9c5f6c3c3ebdd68b4266b29fb8d0639929de0b3dd097918d4c5e215e->leave($__internal_879a862d9c5f6c3c3ebdd68b4266b29fb8d0639929de0b3dd097918d4c5e215e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function gethref($__action__ = null, $__route_parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "route_parameters" => $__route_parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d70943db0ab6e1fdaf939d9625a6424c868b428d1921e9027fa3e5de8a7602e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d70943db0ab6e1fdaf939d9625a6424c868b428d1921e9027fa3e5de8a7602e9->enter($__internal_d70943db0ab6e1fdaf939d9625a6424c868b428d1921e9027fa3e5de8a7602e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "href"));

            $__internal_4f6bb1842447bfa3a2bf96e8c60f157f5dd16849f04bf4bdce3036cc18c2d12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4f6bb1842447bfa3a2bf96e8c60f157f5dd16849f04bf4bdce3036cc18c2d12e->enter($__internal_4f6bb1842447bfa3a2bf96e8c60f157f5dd16849f04bf4bdce3036cc18c2d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "href"));

            // line 40
            echo "    ";
            if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "routeParameters", array()) === null)) {
                // line 41
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "locale", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array())))) {
                    // line 42
                    echo "            ";
                    if (twig_in_filter("_locale", twig_get_array_keys_filter(($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))))) {
                        // line 43
                        echo "                ";
                        $context["route_parameters"] = twig_array_merge(($context["route_parameters"] ?? $this->getContext($context, "route_parameters")), array("_locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array())));
                        // line 44
                        echo "            ";
                    }
                    // line 45
                    echo "        ";
                }
                // line 46
                echo "    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()) === null)) {
                // line 49
                echo "        href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))), "html", null, true);
                echo "\"
    ";
            } else {
                // line 51
                echo "        href=\"javascript:void(0);\"
    ";
            }
            
            $__internal_4f6bb1842447bfa3a2bf96e8c60f157f5dd16849f04bf4bdce3036cc18c2d12e->leave($__internal_4f6bb1842447bfa3a2bf96e8c60f157f5dd16849f04bf4bdce3036cc18c2d12e_prof);

            
            $__internal_d70943db0ab6e1fdaf939d9625a6424c868b428d1921e9027fa3e5de8a7602e9->leave($__internal_d70943db0ab6e1fdaf939d9625a6424c868b428d1921e9027fa3e5de8a7602e9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getvalue($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8e19e8fce588ecdc183f3c5c42cfcf0287f565999670ab3dc1ec18156c160fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8e19e8fce588ecdc183f3c5c42cfcf0287f565999670ab3dc1ec18156c160fcb->enter($__internal_8e19e8fce588ecdc183f3c5c42cfcf0287f565999670ab3dc1ec18156c160fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "value"));

            $__internal_e3d1c57f315275c035d74d29a59b79841a96b6b8510993179b3dc123fb06241e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e3d1c57f315275c035d74d29a59b79841a96b6b8510993179b3dc123fb06241e->enter($__internal_e3d1c57f315275c035d74d29a59b79841a96b6b8510993179b3dc123fb06241e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "value"));

            // line 56
            echo "    ";
            if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
                // line 57
                echo "        value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\"
    ";
            }
            
            $__internal_e3d1c57f315275c035d74d29a59b79841a96b6b8510993179b3dc123fb06241e->leave($__internal_e3d1c57f315275c035d74d29a59b79841a96b6b8510993179b3dc123fb06241e_prof);

            
            $__internal_8e19e8fce588ecdc183f3c5c42cfcf0287f565999670ab3dc1ec18156c160fcb->leave($__internal_8e19e8fce588ecdc183f3c5c42cfcf0287f565999670ab3dc1ec18156c160fcb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SgDatatables/render/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 57,  395 => 56,  377 => 55,  354 => 51,  348 => 49,  346 => 48,  343 => 47,  340 => 46,  337 => 45,  334 => 44,  331 => 43,  328 => 42,  325 => 41,  322 => 40,  303 => 39,  281 => 36,  275 => 34,  269 => 32,  266 => 31,  263 => 30,  245 => 29,  215 => 25,  210 => 24,  192 => 23,  165 => 19,  162 => 18,  158 => 16,  152 => 14,  149 => 13,  146 => 12,  128 => 11,  116 => 81,  113 => 80,  106 => 78,  101 => 76,  96 => 74,  88 => 73,  83 => 72,  78 => 70,  73 => 68,  65 => 67,  60 => 66,  57 => 65,  54 => 64,  50 => 63,  45 => 61,  42 => 60,  39 => 54,  36 => 38,  33 => 28,  30 => 22,  27 => 10,  25 => 9,);
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
{% import _self as macros %}

{% macro link_title(action) %}
    {% if action.label is same as(null) and action.icon is same as(null) %}
        {% if action.route is not same as(null) %}
            {{ action.route }}
        {% else %}
            null
        {% endif %}
    {% else %}
        <span class=\"{{ action.icon }}\"></span> {{ action.label }}
    {% endif %}
{% endmacro %}

{% macro attributes(action) %}
    {% for key, value in action.attributes %}
        {{ key }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{% macro confirm_dialog(action) %}
    {% if action.confirm is same as(true) %}
        {% if action.confirmMessage is not same as(null) %}
            onclick=\"return confirm('{{ action.confirmMessage }}')\"
        {% else %}
            onclick=\"return confirm('{{ 'sg.datatables.confirmMessage'|trans({}, 'messages') }}')\"
        {% endif %}
    {% endif %}
{% endmacro %}

{% macro href(action, route_parameters) %}
    {% if action.routeParameters is not same as(null) %}
        {% if app.request.locale is defined and app.request.locale is not null %}
            {% if '_locale' in route_parameters|keys %}
                {% set route_parameters = route_parameters|merge({ '_locale': app.request.locale }) %}
            {% endif %}
        {% endif %}
    {% endif %}

    {% if action.route is not same as(null) %}
        href=\"{{ path(action.route, route_parameters) }}\"
    {% else %}
        href=\"javascript:void(0);\"
    {% endif %}
{% endmacro %}

{% macro value(value) %}
    {% if value is not null %}
        value=\"{{ value }}\"
    {% endif %}
{% endmacro %}

{{ start_html_container|raw }}

{% for actionKey, action in actions %}
    {% if render_if_actions[actionKey] is same as(true) %}
        {% if action.button is same as(false) %}
            {{ action.startHtml|raw }}
            <a {{ macros.href(action, route_parameters[actionKey]) }} {{ macros.attributes(action) }} {{ macros.confirm_dialog(action) }}>
                {{ macros.link_title(action) }}
            </a>
            {{ action.endHtml|raw }}
        {% else %}
            {{ action.startHtml|raw }}
            <button type=\"button\" {{ macros.value(values[actionKey]) }} {{ macros.attributes(action) }} {{ macros.confirm_dialog(action) }}>
                {{ macros.link_title(action) }}
            </button>
            {{ action.endHtml|raw }}
        {% endif %}
    {% endif %}
{% endfor %}

{{ end_html_container|raw }}
", "@SgDatatables/render/action.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\render\\action.html.twig");
    }
}
