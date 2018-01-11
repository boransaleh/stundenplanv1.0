<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_32ef5f50734257010cee0c8e10d511a8a91fd21d99159a3063627fc4d7c24240 extends Twig_Template
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
        $__internal_3e6562486a57fadffc90d50bce02d988925ca9f4c702db22584c1b857a29972d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6562486a57fadffc90d50bce02d988925ca9f4c702db22584c1b857a29972d->enter($__internal_3e6562486a57fadffc90d50bce02d988925ca9f4c702db22584c1b857a29972d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_834fc6135c8770683bec86cba8bbdfc82a85cb47fdcb4dfb529726caa364ea36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834fc6135c8770683bec86cba8bbdfc82a85cb47fdcb4dfb529726caa364ea36->enter($__internal_834fc6135c8770683bec86cba8bbdfc82a85cb47fdcb4dfb529726caa364ea36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3e6562486a57fadffc90d50bce02d988925ca9f4c702db22584c1b857a29972d->leave($__internal_3e6562486a57fadffc90d50bce02d988925ca9f4c702db22584c1b857a29972d_prof);

        
        $__internal_834fc6135c8770683bec86cba8bbdfc82a85cb47fdcb4dfb529726caa364ea36->leave($__internal_834fc6135c8770683bec86cba8bbdfc82a85cb47fdcb4dfb529726caa364ea36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
