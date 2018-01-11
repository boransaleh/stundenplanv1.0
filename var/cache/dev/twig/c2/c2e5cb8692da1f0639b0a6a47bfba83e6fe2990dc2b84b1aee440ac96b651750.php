<?php

/* @SgDatatables/render/multiselect.html.twig */
class __TwigTemplate_25794ec68ede818554d8abf055c3ae15dca2678ab2c7d7b8e3862fc5f3810a77 extends Twig_Template
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
        $__internal_fb149009c52d959d6609d57a85d472adadbb174a26e3cb78e60d26bd37169572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb149009c52d959d6609d57a85d472adadbb174a26e3cb78e60d26bd37169572->enter($__internal_fb149009c52d959d6609d57a85d472adadbb174a26e3cb78e60d26bd37169572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/render/multiselect.html.twig"));

        $__internal_e00f3bb3813f8c096862da0d50b265b1c1e337625a122c2d44044826cf79ee34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00f3bb3813f8c096862da0d50b265b1c1e337625a122c2d44044826cf79ee34->enter($__internal_e00f3bb3813f8c096862da0d50b265b1c1e337625a122c2d44044826cf79ee34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/render/multiselect.html.twig"));

        // line 9
        $context["macros"] = $this;
        // line 10
        echo "
";
        // line 16
        echo "
";
        // line 17
        if ((($context["render_if_cbox"] ?? $this->getContext($context, "render_if_cbox")) === true)) {
            // line 18
            echo "    ";
            echo ($context["start_html"] ?? $this->getContext($context, "start_html"));
            echo "
    <input type=\"checkbox\" ";
            // line 19
            echo $context["macros"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" />
    ";
            // line 20
            echo ($context["end_html"] ?? $this->getContext($context, "end_html"));
            echo "
";
        }
        
        $__internal_fb149009c52d959d6609d57a85d472adadbb174a26e3cb78e60d26bd37169572->leave($__internal_fb149009c52d959d6609d57a85d472adadbb174a26e3cb78e60d26bd37169572_prof);

        
        $__internal_e00f3bb3813f8c096862da0d50b265b1c1e337625a122c2d44044826cf79ee34->leave($__internal_e00f3bb3813f8c096862da0d50b265b1c1e337625a122c2d44044826cf79ee34_prof);

    }

    // line 11
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ee0550f6504f61992e1c7a9dce5c2f016d70d1d886dd93c4d1652eb6c869cb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ee0550f6504f61992e1c7a9dce5c2f016d70d1d886dd93c4d1652eb6c869cb3e->enter($__internal_ee0550f6504f61992e1c7a9dce5c2f016d70d1d886dd93c4d1652eb6c869cb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_6f0cd62d869f90c74a07a00c9ad8555230683f2e581a536828c158863990d159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6f0cd62d869f90c74a07a00c9ad8555230683f2e581a536828c158863990d159->enter($__internal_6f0cd62d869f90c74a07a00c9ad8555230683f2e581a536828c158863990d159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 13
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
            
            $__internal_6f0cd62d869f90c74a07a00c9ad8555230683f2e581a536828c158863990d159->leave($__internal_6f0cd62d869f90c74a07a00c9ad8555230683f2e581a536828c158863990d159_prof);

            
            $__internal_ee0550f6504f61992e1c7a9dce5c2f016d70d1d886dd93c4d1652eb6c869cb3e->leave($__internal_ee0550f6504f61992e1c7a9dce5c2f016d70d1d886dd93c4d1652eb6c869cb3e_prof);

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
        return "@SgDatatables/render/multiselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  77 => 12,  59 => 11,  46 => 20,  40 => 19,  35 => 18,  33 => 17,  30 => 16,  27 => 10,  25 => 9,);
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

{% macro attributes(attributes) %}
    {% for key, value in attributes %}
        {{ key }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{% if render_if_cbox is same as(true) %}
    {{ start_html|raw }}
    <input type=\"checkbox\" {{ macros.attributes(attributes) }} value=\"{{ value }}\" />
    {{ end_html|raw }}
{% endif %}
", "@SgDatatables/render/multiselect.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\render\\multiselect.html.twig");
    }
}
