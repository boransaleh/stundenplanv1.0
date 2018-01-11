<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9d29a654655fa328cc1ccc790c4085f972ccb1ece6a33af848b0f6331c0f146a extends Twig_Template
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
        $__internal_fc17feda4c60d06f1af9b912c385f414670dca5560d80c54708375ca9a9de74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc17feda4c60d06f1af9b912c385f414670dca5560d80c54708375ca9a9de74d->enter($__internal_fc17feda4c60d06f1af9b912c385f414670dca5560d80c54708375ca9a9de74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_529cc1f31d3868bd01f28bf8dcff67d7824e3572bfd52c58aeee645fa13c3af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529cc1f31d3868bd01f28bf8dcff67d7824e3572bfd52c58aeee645fa13c3af3->enter($__internal_529cc1f31d3868bd01f28bf8dcff67d7824e3572bfd52c58aeee645fa13c3af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fc17feda4c60d06f1af9b912c385f414670dca5560d80c54708375ca9a9de74d->leave($__internal_fc17feda4c60d06f1af9b912c385f414670dca5560d80c54708375ca9a9de74d_prof);

        
        $__internal_529cc1f31d3868bd01f28bf8dcff67d7824e3572bfd52c58aeee645fa13c3af3->leave($__internal_529cc1f31d3868bd01f28bf8dcff67d7824e3572bfd52c58aeee645fa13c3af3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
