<?php

/* @SgDatatables/datatable/datatable.html.twig */
class __TwigTemplate_8bf493ee1c92a2daa57d6efd2e27435a3cd3157910bc7f25362db433d9031b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sg_datatables' => array($this, 'block_sg_datatables'),
            'sg_datatables_html' => array($this, 'block_sg_datatables_html'),
            'sg_datatables_js' => array($this, 'block_sg_datatables_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dde4fb55d33af83fc08ade71d0919ba2c5d50a36fe7c960b756374f7ef0f9ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde4fb55d33af83fc08ade71d0919ba2c5d50a36fe7c960b756374f7ef0f9ff7->enter($__internal_dde4fb55d33af83fc08ade71d0919ba2c5d50a36fe7c960b756374f7ef0f9ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/datatable.html.twig"));

        $__internal_5a9ff7c37dad211a6e8179926fe15c51a4df62bbcc75e1082cd2c97cde9782a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9ff7c37dad211a6e8179926fe15c51a4df62bbcc75e1082cd2c97cde9782a6->enter($__internal_5a9ff7c37dad211a6e8179926fe15c51a4df62bbcc75e1082cd2c97cde9782a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatables', $context, $blocks);
        
        $__internal_dde4fb55d33af83fc08ade71d0919ba2c5d50a36fe7c960b756374f7ef0f9ff7->leave($__internal_dde4fb55d33af83fc08ade71d0919ba2c5d50a36fe7c960b756374f7ef0f9ff7_prof);

        
        $__internal_5a9ff7c37dad211a6e8179926fe15c51a4df62bbcc75e1082cd2c97cde9782a6->leave($__internal_5a9ff7c37dad211a6e8179926fe15c51a4df62bbcc75e1082cd2c97cde9782a6_prof);

    }

    public function block_sg_datatables($context, array $blocks = array())
    {
        $__internal_7993e7bb10ac476b15aaa2c16742b7fae9aad4bbdfc30d99ccecf0cba1a207fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7993e7bb10ac476b15aaa2c16742b7fae9aad4bbdfc30d99ccecf0cba1a207fd->enter($__internal_7993e7bb10ac476b15aaa2c16742b7fae9aad4bbdfc30d99ccecf0cba1a207fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables"));

        $__internal_7db43096d194bec1b39bbde8b642fadcef280fca2a1c1a99af5425a161f2b434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db43096d194bec1b39bbde8b642fadcef280fca2a1c1a99af5425a161f2b434->enter($__internal_7db43096d194bec1b39bbde8b642fadcef280fca2a1c1a99af5425a161f2b434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables"));

        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('sg_datatables_html', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('sg_datatables_js', $context, $blocks);
        // line 22
        echo "
";
        
        $__internal_7db43096d194bec1b39bbde8b642fadcef280fca2a1c1a99af5425a161f2b434->leave($__internal_7db43096d194bec1b39bbde8b642fadcef280fca2a1c1a99af5425a161f2b434_prof);

        
        $__internal_7993e7bb10ac476b15aaa2c16742b7fae9aad4bbdfc30d99ccecf0cba1a207fd->leave($__internal_7993e7bb10ac476b15aaa2c16742b7fae9aad4bbdfc30d99ccecf0cba1a207fd_prof);

    }

    // line 11
    public function block_sg_datatables_html($context, array $blocks = array())
    {
        $__internal_e4dd57356be5a935c8a64e2f98c6ea4787113c77a2a7dbe4d04a8f5855424943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dd57356be5a935c8a64e2f98c6ea4787113c77a2a7dbe4d04a8f5855424943->enter($__internal_e4dd57356be5a935c8a64e2f98c6ea4787113c77a2a7dbe4d04a8f5855424943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_html"));

        $__internal_1482b165d07154ccb1452718118cbfdc39076741e812bb8cc2dc9d96bb335fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1482b165d07154ccb1452718118cbfdc39076741e812bb8cc2dc9d96bb335fc8->enter($__internal_1482b165d07154ccb1452718118cbfdc39076741e812bb8cc2dc9d96bb335fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:datatable:datatable_html.html.twig", "@SgDatatables/datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_1482b165d07154ccb1452718118cbfdc39076741e812bb8cc2dc9d96bb335fc8->leave($__internal_1482b165d07154ccb1452718118cbfdc39076741e812bb8cc2dc9d96bb335fc8_prof);

        
        $__internal_e4dd57356be5a935c8a64e2f98c6ea4787113c77a2a7dbe4d04a8f5855424943->leave($__internal_e4dd57356be5a935c8a64e2f98c6ea4787113c77a2a7dbe4d04a8f5855424943_prof);

    }

    // line 17
    public function block_sg_datatables_js($context, array $blocks = array())
    {
        $__internal_cb750350bf64d94b6563eec81dc05513a609b41513f14f0e9e9d2a278423d557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb750350bf64d94b6563eec81dc05513a609b41513f14f0e9e9d2a278423d557->enter($__internal_cb750350bf64d94b6563eec81dc05513a609b41513f14f0e9e9d2a278423d557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_js"));

        $__internal_d902ec80b7e9abfc6a5e372a6292ce41efc58d734e002aa71a0b80b624555416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d902ec80b7e9abfc6a5e372a6292ce41efc58d734e002aa71a0b80b624555416->enter($__internal_d902ec80b7e9abfc6a5e372a6292ce41efc58d734e002aa71a0b80b624555416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:datatable:datatable_js.html.twig", "@SgDatatables/datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_d902ec80b7e9abfc6a5e372a6292ce41efc58d734e002aa71a0b80b624555416->leave($__internal_d902ec80b7e9abfc6a5e372a6292ce41efc58d734e002aa71a0b80b624555416_prof);

        
        $__internal_cb750350bf64d94b6563eec81dc05513a609b41513f14f0e9e9d2a278423d557->leave($__internal_cb750350bf64d94b6563eec81dc05513a609b41513f14f0e9e9d2a278423d557_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/datatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  104 => 19,  101 => 18,  92 => 17,  81 => 14,  79 => 13,  76 => 12,  67 => 11,  56 => 22,  54 => 17,  51 => 16,  49 => 11,  46 => 10,  28 => 9,);
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
{% block sg_datatables %}

    {% block sg_datatables_html %}

        {% include 'SgDatatablesBundle:datatable:datatable_html.html.twig' %}

    {% endblock %}

    {% block sg_datatables_js %}

        {% include 'SgDatatablesBundle:datatable:datatable_js.html.twig' %}

    {% endblock %}

{% endblock  %}
", "@SgDatatables/datatable/datatable.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\datatable.html.twig");
    }
}
