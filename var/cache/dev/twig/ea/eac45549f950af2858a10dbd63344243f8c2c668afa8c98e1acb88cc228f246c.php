<?php

/* :callback:init.js.twig */
class __TwigTemplate_faa28acbf376c5b0316f1bcd366d26eb85c95445c9cdb1e5a16b2afee24239d3 extends Twig_Template
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
        $__internal_ed895a538ad4f0e06d0ff39d666c8360bb7e3629aee353f3adcdb3a4f3200c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed895a538ad4f0e06d0ff39d666c8360bb7e3629aee353f3adcdb3a4f3200c21->enter($__internal_ed895a538ad4f0e06d0ff39d666c8360bb7e3629aee353f3adcdb3a4f3200c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:init.js.twig"));

        $__internal_3695d5b07a8788b7a68a0d9b0cf583f931eca29d6db4fda3db2658cd40d1f769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3695d5b07a8788b7a68a0d9b0cf583f931eca29d6db4fda3db2658cd40d1f769->enter($__internal_3695d5b07a8788b7a68a0d9b0cf583f931eca29d6db4fda3db2658cd40d1f769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:init.js.twig"));

        // line 1
        echo "function initComplete(settings) {
    alert('DataTables has redrawn the table.');
}
";
        
        $__internal_ed895a538ad4f0e06d0ff39d666c8360bb7e3629aee353f3adcdb3a4f3200c21->leave($__internal_ed895a538ad4f0e06d0ff39d666c8360bb7e3629aee353f3adcdb3a4f3200c21_prof);

        
        $__internal_3695d5b07a8788b7a68a0d9b0cf583f931eca29d6db4fda3db2658cd40d1f769->leave($__internal_3695d5b07a8788b7a68a0d9b0cf583f931eca29d6db4fda3db2658cd40d1f769_prof);

    }

    public function getTemplateName()
    {
        return ":callback:init.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("function initComplete(settings) {
    alert('DataTables has redrawn the table.');
}
", ":callback:init.js.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/callback/init.js.twig");
    }
}
