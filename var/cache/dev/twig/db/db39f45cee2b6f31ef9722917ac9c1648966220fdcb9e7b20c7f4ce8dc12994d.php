<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_67fa942968d0cefa9be140eae20ea029d09011094282fe1134b76c5cd176a4ea extends Twig_Template
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
        $__internal_9323d1192735f93449eac2fb0628297b7a6831f98e16cac1e1cf53542548203a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9323d1192735f93449eac2fb0628297b7a6831f98e16cac1e1cf53542548203a->enter($__internal_9323d1192735f93449eac2fb0628297b7a6831f98e16cac1e1cf53542548203a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_73b48d1eeea65644c9dcb01897d5f3943dac7678dc9313f6ece3c2f73a4d3630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b48d1eeea65644c9dcb01897d5f3943dac7678dc9313f6ece3c2f73a4d3630->enter($__internal_73b48d1eeea65644c9dcb01897d5f3943dac7678dc9313f6ece3c2f73a4d3630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9323d1192735f93449eac2fb0628297b7a6831f98e16cac1e1cf53542548203a->leave($__internal_9323d1192735f93449eac2fb0628297b7a6831f98e16cac1e1cf53542548203a_prof);

        
        $__internal_73b48d1eeea65644c9dcb01897d5f3943dac7678dc9313f6ece3c2f73a4d3630->leave($__internal_73b48d1eeea65644c9dcb01897d5f3943dac7678dc9313f6ece3c2f73a4d3630_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
