<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_04d205fc2292c41297f46b73c240b118b22a65c88cfaad23d151b2d34404288c extends Twig_Template
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
        $__internal_9aae4076be5d6c446f15c484b916ae929bbfbd9dd4a9fbace9f1315fb83faca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aae4076be5d6c446f15c484b916ae929bbfbd9dd4a9fbace9f1315fb83faca8->enter($__internal_9aae4076be5d6c446f15c484b916ae929bbfbd9dd4a9fbace9f1315fb83faca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_017cc9a84f8c927e150a1c2a75de2bf6a3d30962cafd15b53293534d0f723642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017cc9a84f8c927e150a1c2a75de2bf6a3d30962cafd15b53293534d0f723642->enter($__internal_017cc9a84f8c927e150a1c2a75de2bf6a3d30962cafd15b53293534d0f723642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9aae4076be5d6c446f15c484b916ae929bbfbd9dd4a9fbace9f1315fb83faca8->leave($__internal_9aae4076be5d6c446f15c484b916ae929bbfbd9dd4a9fbace9f1315fb83faca8_prof);

        
        $__internal_017cc9a84f8c927e150a1c2a75de2bf6a3d30962cafd15b53293534d0f723642->leave($__internal_017cc9a84f8c927e150a1c2a75de2bf6a3d30962cafd15b53293534d0f723642_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
