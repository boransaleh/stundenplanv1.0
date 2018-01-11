<?php

/* SgDatatablesBundle:render:multiselect.html.twig */
class __TwigTemplate_fe2df01ef97f232406387a3e7996c1de1c38c7c27fe90eb60943918670762843 extends Twig_Template
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
        $__internal_0af38a30b8b7f541b0d6e0f4429fabd574b4dd9a9b5c411ae811cca4d48c85cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af38a30b8b7f541b0d6e0f4429fabd574b4dd9a9b5c411ae811cca4d48c85cd->enter($__internal_0af38a30b8b7f541b0d6e0f4429fabd574b4dd9a9b5c411ae811cca4d48c85cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:multiselect.html.twig"));

        $__internal_c14e27cf7dbe0e517997e6da7583faaa69d72087574e7832aa21f127e9494bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14e27cf7dbe0e517997e6da7583faaa69d72087574e7832aa21f127e9494bdc->enter($__internal_c14e27cf7dbe0e517997e6da7583faaa69d72087574e7832aa21f127e9494bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:multiselect.html.twig"));

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
        
        $__internal_0af38a30b8b7f541b0d6e0f4429fabd574b4dd9a9b5c411ae811cca4d48c85cd->leave($__internal_0af38a30b8b7f541b0d6e0f4429fabd574b4dd9a9b5c411ae811cca4d48c85cd_prof);

        
        $__internal_c14e27cf7dbe0e517997e6da7583faaa69d72087574e7832aa21f127e9494bdc->leave($__internal_c14e27cf7dbe0e517997e6da7583faaa69d72087574e7832aa21f127e9494bdc_prof);

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
            $__internal_80124bc5ac44eaeeee3a0601f4385885606d2d24753de9e5b82ded74b3708ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_80124bc5ac44eaeeee3a0601f4385885606d2d24753de9e5b82ded74b3708ca4->enter($__internal_80124bc5ac44eaeeee3a0601f4385885606d2d24753de9e5b82ded74b3708ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_33eeaf2d22632e8ed39271bd1793dcbf9bbc8bd9e4f4e398f70728b1e69c174c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_33eeaf2d22632e8ed39271bd1793dcbf9bbc8bd9e4f4e398f70728b1e69c174c->enter($__internal_33eeaf2d22632e8ed39271bd1793dcbf9bbc8bd9e4f4e398f70728b1e69c174c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

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
            
            $__internal_33eeaf2d22632e8ed39271bd1793dcbf9bbc8bd9e4f4e398f70728b1e69c174c->leave($__internal_33eeaf2d22632e8ed39271bd1793dcbf9bbc8bd9e4f4e398f70728b1e69c174c_prof);

            
            $__internal_80124bc5ac44eaeeee3a0601f4385885606d2d24753de9e5b82ded74b3708ca4->leave($__internal_80124bc5ac44eaeeee3a0601f4385885606d2d24753de9e5b82ded74b3708ca4_prof);

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
        return "SgDatatablesBundle:render:multiselect.html.twig";
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
", "SgDatatablesBundle:render:multiselect.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/render/multiselect.html.twig");
    }
}
