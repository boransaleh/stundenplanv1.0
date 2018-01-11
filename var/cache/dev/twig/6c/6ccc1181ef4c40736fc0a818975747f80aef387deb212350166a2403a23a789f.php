<?php

/* SgDatatablesBundle:datatable:datatable.html.twig */
class __TwigTemplate_5800206908989cc2a5b2e3a5ebbad59d672ebed5b06ebece0a382107af5c3051 extends Twig_Template
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
        $__internal_3e6422145264716ab0e55c35bfdd9324ae17635501fea51453c77e10fb018e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6422145264716ab0e55c35bfdd9324ae17635501fea51453c77e10fb018e32->enter($__internal_3e6422145264716ab0e55c35bfdd9324ae17635501fea51453c77e10fb018e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable.html.twig"));

        $__internal_6853e8a049748f8b78697c5426dfb7ddc46ce0f5e706b5bd4706554a37736242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6853e8a049748f8b78697c5426dfb7ddc46ce0f5e706b5bd4706554a37736242->enter($__internal_6853e8a049748f8b78697c5426dfb7ddc46ce0f5e706b5bd4706554a37736242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatables', $context, $blocks);
        
        $__internal_3e6422145264716ab0e55c35bfdd9324ae17635501fea51453c77e10fb018e32->leave($__internal_3e6422145264716ab0e55c35bfdd9324ae17635501fea51453c77e10fb018e32_prof);

        
        $__internal_6853e8a049748f8b78697c5426dfb7ddc46ce0f5e706b5bd4706554a37736242->leave($__internal_6853e8a049748f8b78697c5426dfb7ddc46ce0f5e706b5bd4706554a37736242_prof);

    }

    public function block_sg_datatables($context, array $blocks = array())
    {
        $__internal_8b77f88dcf3213de69da67aff27b9bb7a377c91400531b021ba334e3c1465c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b77f88dcf3213de69da67aff27b9bb7a377c91400531b021ba334e3c1465c35->enter($__internal_8b77f88dcf3213de69da67aff27b9bb7a377c91400531b021ba334e3c1465c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables"));

        $__internal_eaf0bdcfb58832ddcc2a488f6473c099376b6ce32a65ba6d2af89aa379a1ec11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf0bdcfb58832ddcc2a488f6473c099376b6ce32a65ba6d2af89aa379a1ec11->enter($__internal_eaf0bdcfb58832ddcc2a488f6473c099376b6ce32a65ba6d2af89aa379a1ec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables"));

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
        
        $__internal_eaf0bdcfb58832ddcc2a488f6473c099376b6ce32a65ba6d2af89aa379a1ec11->leave($__internal_eaf0bdcfb58832ddcc2a488f6473c099376b6ce32a65ba6d2af89aa379a1ec11_prof);

        
        $__internal_8b77f88dcf3213de69da67aff27b9bb7a377c91400531b021ba334e3c1465c35->leave($__internal_8b77f88dcf3213de69da67aff27b9bb7a377c91400531b021ba334e3c1465c35_prof);

    }

    // line 11
    public function block_sg_datatables_html($context, array $blocks = array())
    {
        $__internal_a167feb34e9b1cfaf74608433eafed44998bec306925be7ec1d55932aa0fc1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a167feb34e9b1cfaf74608433eafed44998bec306925be7ec1d55932aa0fc1d3->enter($__internal_a167feb34e9b1cfaf74608433eafed44998bec306925be7ec1d55932aa0fc1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_html"));

        $__internal_82883717b18cb79f92aaf0eecb32bf05186087bbefce3e66738ee0f208b73224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82883717b18cb79f92aaf0eecb32bf05186087bbefce3e66738ee0f208b73224->enter($__internal_82883717b18cb79f92aaf0eecb32bf05186087bbefce3e66738ee0f208b73224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:datatable:datatable_html.html.twig", "SgDatatablesBundle:datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_82883717b18cb79f92aaf0eecb32bf05186087bbefce3e66738ee0f208b73224->leave($__internal_82883717b18cb79f92aaf0eecb32bf05186087bbefce3e66738ee0f208b73224_prof);

        
        $__internal_a167feb34e9b1cfaf74608433eafed44998bec306925be7ec1d55932aa0fc1d3->leave($__internal_a167feb34e9b1cfaf74608433eafed44998bec306925be7ec1d55932aa0fc1d3_prof);

    }

    // line 17
    public function block_sg_datatables_js($context, array $blocks = array())
    {
        $__internal_daf6710449a03d8d1e26c3823edeaf342a1b29d10242ea6a218a5510e269a0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf6710449a03d8d1e26c3823edeaf342a1b29d10242ea6a218a5510e269a0b2->enter($__internal_daf6710449a03d8d1e26c3823edeaf342a1b29d10242ea6a218a5510e269a0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_js"));

        $__internal_ca51da5627cf071c4a34a2be2a79613a66eda85743200148fff708a701845a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca51da5627cf071c4a34a2be2a79613a66eda85743200148fff708a701845a11->enter($__internal_ca51da5627cf071c4a34a2be2a79613a66eda85743200148fff708a701845a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:datatable:datatable_js.html.twig", "SgDatatablesBundle:datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_ca51da5627cf071c4a34a2be2a79613a66eda85743200148fff708a701845a11->leave($__internal_ca51da5627cf071c4a34a2be2a79613a66eda85743200148fff708a701845a11_prof);

        
        $__internal_daf6710449a03d8d1e26c3823edeaf342a1b29d10242ea6a218a5510e269a0b2->leave($__internal_daf6710449a03d8d1e26c3823edeaf342a1b29d10242ea6a218a5510e269a0b2_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:datatable.html.twig";
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
", "SgDatatablesBundle:datatable:datatable.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/datatable/datatable.html.twig");
    }
}
