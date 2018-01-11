<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_481bdf2c145423ff33afdff08a960ee3530930ae8ff91e82eb870cb91e0cc058 extends Twig_Template
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
        $__internal_95904a7805e28759d005767201b18000cea89e8940555411913fffcd4bb3f890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95904a7805e28759d005767201b18000cea89e8940555411913fffcd4bb3f890->enter($__internal_95904a7805e28759d005767201b18000cea89e8940555411913fffcd4bb3f890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0e7391cc0a8135cefcbc4fdbbaa55874e77124f1b43467923366eca850b04b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7391cc0a8135cefcbc4fdbbaa55874e77124f1b43467923366eca850b04b84->enter($__internal_0e7391cc0a8135cefcbc4fdbbaa55874e77124f1b43467923366eca850b04b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_95904a7805e28759d005767201b18000cea89e8940555411913fffcd4bb3f890->leave($__internal_95904a7805e28759d005767201b18000cea89e8940555411913fffcd4bb3f890_prof);

        
        $__internal_0e7391cc0a8135cefcbc4fdbbaa55874e77124f1b43467923366eca850b04b84->leave($__internal_0e7391cc0a8135cefcbc4fdbbaa55874e77124f1b43467923366eca850b04b84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
