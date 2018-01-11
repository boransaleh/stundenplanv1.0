<?php

/* callback/init.js.twig */
class __TwigTemplate_861d4444a239f4e575fab4326b6568d83ca87474f66648e374fcc85d928d2ceb extends Twig_Template
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
        $__internal_87590e6bfc10ed19b9b241ad40623795b0e7ab4517fd73dc090371cc76f19798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87590e6bfc10ed19b9b241ad40623795b0e7ab4517fd73dc090371cc76f19798->enter($__internal_87590e6bfc10ed19b9b241ad40623795b0e7ab4517fd73dc090371cc76f19798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "callback/init.js.twig"));

        $__internal_7044f4ea24587a1b1c7d543d105594ef0090acf347703a20c193a519e0660a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7044f4ea24587a1b1c7d543d105594ef0090acf347703a20c193a519e0660a5c->enter($__internal_7044f4ea24587a1b1c7d543d105594ef0090acf347703a20c193a519e0660a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "callback/init.js.twig"));

        // line 1
        echo "function initComplete(settings) {
    alert('DataTables has redrawn the table.');
}
";
        
        $__internal_87590e6bfc10ed19b9b241ad40623795b0e7ab4517fd73dc090371cc76f19798->leave($__internal_87590e6bfc10ed19b9b241ad40623795b0e7ab4517fd73dc090371cc76f19798_prof);

        
        $__internal_7044f4ea24587a1b1c7d543d105594ef0090acf347703a20c193a519e0660a5c->leave($__internal_7044f4ea24587a1b1c7d543d105594ef0090acf347703a20c193a519e0660a5c_prof);

    }

    public function getTemplateName()
    {
        return "callback/init.js.twig";
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
", "callback/init.js.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\callback\\init.js.twig");
    }
}
