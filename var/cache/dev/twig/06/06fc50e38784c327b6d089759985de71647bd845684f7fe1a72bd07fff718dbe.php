<?php

/* @SgDatatables/datatable/language.html.twig */
class __TwigTemplate_20ac8f5df636596a9c937ea3039709dbde4f797c689ff731c741ddcdf4db7f49 extends Twig_Template
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
        $__internal_6c2bd07002cc24ee284a0b73018161bcbe88e43485b7eba811ef01606c89d81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2bd07002cc24ee284a0b73018161bcbe88e43485b7eba811ef01606c89d81c->enter($__internal_6c2bd07002cc24ee284a0b73018161bcbe88e43485b7eba811ef01606c89d81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/language.html.twig"));

        $__internal_1fe5acac6997a8c0a241b13af2a2fcec8e2253f9e100eeeee673456a32ff3306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe5acac6997a8c0a241b13af2a2fcec8e2253f9e100eeeee673456a32ff3306->enter($__internal_1fe5acac6997a8c0a241b13af2a2fcec8e2253f9e100eeeee673456a32ff3306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/language.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "language", array()) === null)) {
            // line 2
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "cdnLanguageByLocale", array()) === true)) {
                // line 3
                echo "        \"language\": {
            \"url\": \"";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "languageCDNFile", array()), twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), 0, 2), array(), "array"), "datatables_cdn"), "html", null, true);
                echo "\"
        }
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "languageByLocale", array()) === true)) {
                // line 9
                echo "        \"language\":
            ";
                // line 10
                $this->loadTemplate((("SgDatatablesBundle:i18n:" . twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), 0, 2)) . ".json.twig"), "@SgDatatables/datatable/language.html.twig", 10)->display($context);
                // line 11
                echo "    ";
            }
        } else {
            // line 13
            echo "    \"language\":
        ";
            // line 14
            $this->loadTemplate((("SgDatatablesBundle:i18n:" . twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "language", array()), 0, 2)) . ".json.twig"), "@SgDatatables/datatable/language.html.twig", 14)->display($context);
        }
        
        $__internal_6c2bd07002cc24ee284a0b73018161bcbe88e43485b7eba811ef01606c89d81c->leave($__internal_6c2bd07002cc24ee284a0b73018161bcbe88e43485b7eba811ef01606c89d81c_prof);

        
        $__internal_1fe5acac6997a8c0a241b13af2a2fcec8e2253f9e100eeeee673456a32ff3306->leave($__internal_1fe5acac6997a8c0a241b13af2a2fcec8e2253f9e100eeeee673456a32ff3306_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  53 => 13,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sg_datatables_view.language.language is same as(null) %}
    {% if sg_datatables_view.language.cdnLanguageByLocale is same as(true) %}
        \"language\": {
            \"url\": \"{{ asset(sg_datatables_view.language.languageCDNFile[app.request.locale|slice(0, 2)], 'datatables_cdn') }}\"
        }
    {% endif %}

    {% if sg_datatables_view.language.languageByLocale is same as(true) %}
        \"language\":
            {% include 'SgDatatablesBundle:i18n:' ~ app.request.locale|slice(0, 2) ~ '.json.twig' %}
    {% endif %}
{% else %}
    \"language\":
        {% include 'SgDatatablesBundle:i18n:' ~ sg_datatables_view.language.language|slice(0, 2) ~ '.json.twig' %}
{% endif %}
", "@SgDatatables/datatable/language.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\language.html.twig");
    }
}
