<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_43b8fd8d67a0c3f2118885e000863cf377bbe7afee46f64cceac6a2dd72c519d extends Twig_Template
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
        $__internal_99930ea019c88b2803859fe616973207c83b39876c45edc7efdb914318316b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99930ea019c88b2803859fe616973207c83b39876c45edc7efdb914318316b22->enter($__internal_99930ea019c88b2803859fe616973207c83b39876c45edc7efdb914318316b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c2ec2fb99c1541f6f219552b4c0ef1f0a54ef4527e47a15091725b63cea5eed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ec2fb99c1541f6f219552b4c0ef1f0a54ef4527e47a15091725b63cea5eed9->enter($__internal_c2ec2fb99c1541f6f219552b4c0ef1f0a54ef4527e47a15091725b63cea5eed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_99930ea019c88b2803859fe616973207c83b39876c45edc7efdb914318316b22->leave($__internal_99930ea019c88b2803859fe616973207c83b39876c45edc7efdb914318316b22_prof);

        
        $__internal_c2ec2fb99c1541f6f219552b4c0ef1f0a54ef4527e47a15091725b63cea5eed9->leave($__internal_c2ec2fb99c1541f6f219552b4c0ef1f0a54ef4527e47a15091725b63cea5eed9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
