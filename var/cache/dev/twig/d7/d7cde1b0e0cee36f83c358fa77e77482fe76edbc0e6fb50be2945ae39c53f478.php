<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_70cdbc29b92648ba882e9104c788ae28e806a8d80a9673207849655caf0f194c extends Twig_Template
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
        $__internal_21ae26f9b80ccb3926667fe93a770c1c3ba9be9c16b7df00e921b67920811ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ae26f9b80ccb3926667fe93a770c1c3ba9be9c16b7df00e921b67920811ba8->enter($__internal_21ae26f9b80ccb3926667fe93a770c1c3ba9be9c16b7df00e921b67920811ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_56ccacc1743ddfbcccc01a728649aee9f799b7fc27ca34377070cfd278c1c163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ccacc1743ddfbcccc01a728649aee9f799b7fc27ca34377070cfd278c1c163->enter($__internal_56ccacc1743ddfbcccc01a728649aee9f799b7fc27ca34377070cfd278c1c163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_21ae26f9b80ccb3926667fe93a770c1c3ba9be9c16b7df00e921b67920811ba8->leave($__internal_21ae26f9b80ccb3926667fe93a770c1c3ba9be9c16b7df00e921b67920811ba8_prof);

        
        $__internal_56ccacc1743ddfbcccc01a728649aee9f799b7fc27ca34377070cfd278c1c163->leave($__internal_56ccacc1743ddfbcccc01a728649aee9f799b7fc27ca34377070cfd278c1c163_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
