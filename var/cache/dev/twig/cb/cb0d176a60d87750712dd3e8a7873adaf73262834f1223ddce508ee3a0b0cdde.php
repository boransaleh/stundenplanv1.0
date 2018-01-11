<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_21d79b32f08a9de7845ca7600c3b7e95bc5186a41dd23f179bcbabc569587d8c extends Twig_Template
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
        $__internal_29e126b93f1b72ebba76629d00fabc0020d38f5977c98270b51e73cedcd93d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e126b93f1b72ebba76629d00fabc0020d38f5977c98270b51e73cedcd93d68->enter($__internal_29e126b93f1b72ebba76629d00fabc0020d38f5977c98270b51e73cedcd93d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_0f592ed5f8b5cabfa3b286f445f9286cbf3400ff8ac3b9132f0ee20eeca44e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f592ed5f8b5cabfa3b286f445f9286cbf3400ff8ac3b9132f0ee20eeca44e21->enter($__internal_0f592ed5f8b5cabfa3b286f445f9286cbf3400ff8ac3b9132f0ee20eeca44e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_29e126b93f1b72ebba76629d00fabc0020d38f5977c98270b51e73cedcd93d68->leave($__internal_29e126b93f1b72ebba76629d00fabc0020d38f5977c98270b51e73cedcd93d68_prof);

        
        $__internal_0f592ed5f8b5cabfa3b286f445f9286cbf3400ff8ac3b9132f0ee20eeca44e21->leave($__internal_0f592ed5f8b5cabfa3b286f445f9286cbf3400ff8ac3b9132f0ee20eeca44e21_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
